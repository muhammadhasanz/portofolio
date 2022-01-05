<?php
date_default_timezone_set('Asia/Makassar');
$root = "https://" . $_SERVER['HTTP_HOST'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Muhammad Hasan Z | Personal Official Website</title>
  <meta name="author" content="Muhammad Hasan Z">
  <meta name="robots" content="all" />
  <meta name="googlebot" content="index, follow" />
  <meta name="description" content="Muhammad Hasan Z Seorang Web & Android Developer">
  <meta name="keywords" content="Muhammad Hasan Z, Muhammad Hasan Z kimdir" />
  <meta property="og:site_name" content="Muhammad Hasan Z | Personal Official Website" />
  <meta property="og:image" content="<?= $root; ?>/static/img/hasan.jpg" />
  <meta property="og:image:width" content="240" />
  <meta property="og:image:height" content="90" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Muhammad Hasan Z | Personal Official Website" />
  <meta property="og:description" content="Hi, Im Hasan! Im developer Web dan Android Apps" />
  <meta property="og:url" content="<?= $root; ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@muhammadhasanz_" />
  <meta name="twitter:title" content="Muhammad Hasan Z" />
  <meta name="twitter:description" content="Muhammad Hasan Z | Personal Official Website" />
  <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
  <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">
  <link href="static/plugin/nav/css/component.css" rel="stylesheet" />
  <link href="static/css/styles.css" rel="stylesheet">
  <link href="static/css/color/default.css" rel="stylesheet">
  <script src="static/plugin/nav/js/modernizr-custom.js"></script>
  <link rel="icon" href="favicon.ico" />
  <meta name="google-site-verification" content="diuzvxHBR7a3i9SB0kDn1HLRg8MHcs8I12FtPDLwoGU" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link href='custom.css' rel='stylesheet' type='text/css'>
</head>

<body class="dark-body" style="background-image: url(static/img/31367.jpg);">
  <div id="loading">
    <div class="load"><span class="one">Memuat</span></div>
  </div>
  <nav class="pages-nav">
    <div class="pages-nav__item"><a class="link link--page" href="#home">Beranda</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#about">Tentang Saya</a></div>
    <!-- <div class="pages-nav__item"><a class="link link--page" href="#services">What did I do?</a></div> -->
    <div class="pages-nav__item"><a class="link link--page" href="#contact">Kontak Saya</a></div>
  </nav>
  <div class="pages-stack">
    <div class="page home-banner" id="home">
      <div class="container-fluid">
        <div class="row full-screen">
          <div class="col-lg-6 black-bg">
            <div class="user-img text-center d-flex align-items-end h-100 justify-content-center">
              <img src="static/img/hasan.jpg" title="Muhammad Hasan Z" alt="Muhammad Hasan Z">
            </div>
          </div> <!-- col -->
          <div class="col-lg-6 theme-bg">
            <div class="d-flex h-100 align-items-center">
              <div class="particles-block" id="particles-box"></div>
              <div class="home-text">
                <h1>Muhammad Hasan Z</h1>
                <div class="ht-text">
                  <h4>Seorang Freelance <span class="font-alt theme-color"><span id="type-it"></span></span></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page about-section white-bg" id="about">
      <div class="page-scroll">
        <div class="page-title" style="background-image: url(static/img/home-bg-2.jpg);">
          <div class="container">
            <h1>Tentang Saya</h1>
          </div>
        </div>
        <div class="page-content">
          <div class="aboutus-box section gray-bg">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 text-center md-m-45px-b p-50px-r md-p-15px-r">
                  <img src="static/img/hasan.jpg" title="Muhammad Hasan Z" alt="Muhammad Hasan Z">
                </div>
                <div class="col-lg-6">
                  <div class="my-info">
                    <h6 class="font-alt theme-color">Muhammad Hasan Z</h6>
                    <h1 class="dark-color">Pikirkan, rencanakan, lakukan</h1>
                    <h5 class="dark-color"> PENGEMBANG WEB | ANDROID </h5>
                    <p>Hi, Saya Hasan!<br><br>

                      Umur <?= intval(date("Y")) - intval(date("Y", mktime(0, 0, 0, 6, 17, 2000))); ?> tahun, saya suka membuat algoritma baru untuk semuanya, mengubah dari pemikiran menjadi program.</p>
                    <div>
                      <ul>
                        <li><span class="dark-color">TTL</span>: Makassar, 17 Juni 2000</li>
                        <li><span class="dark-color">Umur:</span>: <?= intval(date("Y")) - intval(date("Y", mktime(0, 0, 0, 6, 17, 2000))); ?></li>
                        <li><span class="dark-color">Lokasi</span>: Makassar, Indonesia</li>
                        <li><span class="dark-color">E-Mail</span>: mhmmdhasanz@gmail.com</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="skill-box section gray-bg border-top">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="aboutus-text p-80px-r md-p-0px-r md-m-40px-b">
                    <h6 class="theme-color font-alt">Dunia pribadiku</h6>
                    <h1 class="dark-color">Apa yang aku suka?</h1>
                    <p>Biarkan Anda memberi tahu Anda tentang selera pribadi saya.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="my-info">
                    <div class="row">
                      <div class="col-md-10">
                        <ul>
                          <li>
                            <h5 class="dark-color"><b>Warna kesukaan:</b></h5>Jingga
                          </li><br>
                          <li>
                            <h5 class="dark-color"><b>Kegiatan yang Tertarik:</b></h5>Saya suka berlari, menulis kode, menghabiskan waktu bersama teman-teman saya.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="skill-box section gray-bg border-top">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="aboutus-text p-80px-r md-p-0px-r md-m-40px-b">
                    <h6 class="theme-color font-alt">Bakat Saya</h6>
                    <h1 class="dark-color">Skill Apa yang Saya Miliki?</h1>
                    <p>Saya ingin memberi tahu berapa banyak pengalaman dan pengetahuan yang saya peroleh dalam perjalanan saya kepada Anda.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="skill-left">
                    <div class="progress-lt">
                      <h6>Database</h6>
                    </div>
                    <div class="progress-lt">
                      <h6>PHP</h6>
                    </div>
                    <div class="progress-lt">
                      <h6>HTML</h6>
                    </div>
                    <div class="progress-lt">
                      <h6>CSS</h6>
                    </div>
                    <div class="progress-lt">
                      <h6>JavaScript</h6>
                    </div>
                    <div class="progress-lt">
                      <h6>Dart</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page white-bg" id="contact">
      <div class="page-scroll">
        <div class="page-title" style="background-image: url(static/img/home-bg-2.jpg);">
          <div class="container">
            <h1>Katakan Halo padaku!</h1>
          </div>
        </div>
        <div class="page-content">
          <div class="section gray-bg">
            <div class="container">
              <div class="row justify-content-center m-60px-b sm-m-25px-b">
                <div class="col-md-10 col-lg-8">
                  <div class="section-title text-center">
                    <h6 class="font-alt theme-color">Hubungi saya</h6>
                    <h2 class="dark-color">Mari bekerja bersama.</h2>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4">
                  <div class="contact-info">
                    <p>
                      <label>Alamat</label>
                      <span class="dark-color">Mamajang, Makassar, Sulawesi Selatan.<br />Indonesia</span>
                    </p>
                    <p>
                      <label>E-Mail</label>
                      <span class="dark-color">mhmmdhasanz@gmail.com</span>
                    </p>
                    <p>
                      <label>Nomor</label>
                      <span class="dark-color"><i>Silakan email saya untuk detailnya.</i></span>
                    </p>
                  </div>
                </div>
                <div class="col-md-12 col-lg-8 md-m-30px-t">
                  <div class="contact-form">
                    <form id="contact-form" method="post" action="contact.php" role="form">
                      <div class="messages"></div>
                      <div class="controls">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_name">Nama depan *</label>
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Silakan masukkan nama depan Anda*" required="required" data-error="Nama depan wajib diisi.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_lastname">Nama belakang *</label>
                              <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Silakan masukkan nama belakang Anda *" required="required" data-error="Nama belakang wajib diisi.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_email">Email *</label>
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="Silakan masukkan email Anda *" required="required" data-error="Diperlukan email yang valid.">
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="form_need">Harap tentukan kebutuhan Anda *</label>
                              <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value=""></option>
                                <option value="Penawaran bisnis">Penawaran bisnis</option>
                                <option value="Permintaan produk">Permintaan produk</option>
                                <option value="Permintaan saran">Permintaan saran</option>
                                <option value="Keluhan">Keluhan</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="form_message">Pesan *</label>
                              <textarea id="form_message" name="message" class="form-control" placeholder="Pesan untukku *" rows="4" required="required" data-error="Tolong, tinggalkan kami pesan."></textarea>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Kirim Pesan">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <p class="text-muted">
                              <strong>*</strong> Kolom ini wajib diisi.
                            </p>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="col-12 m-30px-t">
                  <div class="contact-map">
                    <div class="embed-responsive embed-responsive-21by9">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31788.898361497846!2d119.39689081781849!3d-5.165905260078566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d63d70b218f%3A0xea1b3c5ae796ad16!2sKec.%20Mamajang%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1622889534232!5m2!1sid!2sid" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="header">
    <div class="logo">N</div>
    <div class="menu-toggle">
      <button class="menu-button"><span>Menu</span></button>
    </div>
    <ul class="social-icons">
      <li><a href="https://www.instagram.com/muhammadhasanz_/" target="_blank"><i class="fab fa-instagram"></i></a></li>
      <li><a href="https://www.facebook.com/muhammadhasanz17" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCyShpT5j07z1YbcYsqg1l_Q" target="_blank"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </header>
  <script src="static/js/jquery-3.3.1.slim.min.js"></script>
  <script src="static/plugin/bootstrap/js/popper.min.js"></script>
  <script src="static/plugin/bootstrap/js/bootstrap.min.js"></script>
  <script src="static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="static/plugin/typeit-master/typeit.min.js"></script>
  <script src="static/plugin/isotope/isotope.pkgd.min.js"></script>
  <script src="static/plugin/magnific/jquery.magnific-popup.min.js"></script>
  <script src="static/plugin/particles/particles.js"></script>
  <script src="static/plugin/particles/particles-app.js"></script>
  <script src="static/plugin/nav/js/classie.js"></script>
  <script src="static/plugin/nav/js/main.js"></script>
  <script src="static/js/custom.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140862848-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-140862848-3');
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
  <script src="contact.js"></script>
  <!-- <script>
    new TypeIt('#type-it', {
      speed: 200,
      loop: true,
      strings: [
        'Designer',
        'Developer'
      ],
      breakLines: false
    }).go();
  </script> -->
</body>

</html>