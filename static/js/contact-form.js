/**
 * Contact Form Handler with Google Apps Script Integration
 * Professional form submission handler with validation and user feedback
 */

const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbxKhiPS6NTSvEfJIuRlQ19qBSz5Pjh8eLWf49V0PJPCKId4dECTFl8fEJgv9ldNFzUbgQ/exec';
const CONTACT_EMAIL = 'me@keithritherus.my.id';

document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', handleFormSubmit);
  }
});

function handleFormSubmit(e) {
  e.preventDefault();
  
  const form = e.target;
  const formData = new FormData(form);
  const submitBtn = document.querySelector('.btn-send');
  const messagesDiv = document.querySelector('.messages');
  
  if (!validateForm(formData)) {
    showMessage('error', 'Please ensure all required fields are filled correctly with valid information.');
    return;
  }
  
  setSubmitButtonState(submitBtn, true, 'Sending your message...');
  clearMessages(messagesDiv);
  
  fetch(SCRIPT_URL, {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      showMessage('success', 'Thank you for reaching out! Your message has been successfully delivered. I will review your inquiry and respond within 24 hours. If your matter is urgent, please feel free to contact me directly via email at ' + CONTACT_EMAIL);
      form.reset();
    } else {
      showMessage('error', data.message || 'An unexpected error occurred while processing your request. Please try again or contact me directly at ' + CONTACT_EMAIL);
    }
    setSubmitButtonState(submitBtn, false, 'Send Message');
  })
  .catch(error => {
    console.error('Form submission error:', error);
    showMessage('error', 'We encountered a technical issue while sending your message. Please try again in a few moments, or reach out to me directly at ' + CONTACT_EMAIL + '. I apologize for the inconvenience.');
    setSubmitButtonState(submitBtn, false, 'Send Message');
  });
}

function validateForm(formData) {
  const name = formData.get('name');
  const surname = formData.get('surname');
  const email = formData.get('email');
  const need = formData.get('need');
  const message = formData.get('message');
  
  if (!name || !surname || !email || !need || !message) {
    return false;
  }
  
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    showMessage('error', 'Please provide a valid email address so I can respond to your inquiry.');
    return false;
  }
  
  if (message.trim().length < 10) {
    showMessage('error', 'Please provide a more detailed message (minimum 10 characters) so I can better understand your needs.');
    return false;
  }
  
  return true;
}

function showMessage(type, message) {
  const messagesDiv = document.querySelector('.messages');
  if (!messagesDiv) return;
  
  const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
  const bgColor = type === 'success' ? '#d4edda' : '#f8d7da';
  const borderColor = type === 'success' ? '#c3e6cb' : '#f5c6cb';
  const textColor = type === 'success' ? '#155724' : '#721c24';
  const icon = type === 'success' ? '✓' : '⚠';
  
  messagesDiv.innerHTML = `
    <div class="alert ${alertClass}" role="alert" style="
      margin-top: 20px; 
      padding: 18px 22px; 
      background: ${bgColor}; 
      border: 1px solid ${borderColor}; 
      color: ${textColor}; 
      border-radius: 6px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      animation: slideDown 0.3s ease-out;
      line-height: 1.6;
    ">
      <strong style="font-size: 16px;">${icon} ${type === 'success' ? 'Success!' : 'Attention Required:'}</strong><br>
      <span style="margin-top: 8px; display: block;">${message}</span>
    </div>
  `;
  
  messagesDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

function clearMessages(messagesDiv) {
  if (messagesDiv) messagesDiv.innerHTML = '';
}

function setSubmitButtonState(button, disabled, text) {
  if (!button) return;
  button.disabled = disabled;
  button.value = text;
  button.style.opacity = disabled ? '0.6' : '1';
  button.style.cursor = disabled ? 'not-allowed' : 'pointer';
}

const style = document.createElement('style');
style.textContent = `
  @keyframes slideDown {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
  }
`;
document.head.appendChild(style);
