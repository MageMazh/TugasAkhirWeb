<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NoteCity</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

	<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">NoteCity</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">App Features</a></li>
          <li><a class="getstarted scrollto" href="#features">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
          
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
          <h1>Welcome to NoteCity</h1>
          <h2>These notes are designed for ease of use. The simple structure ensures that every idea can be recorded without a hitch.</h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features bg-light">
      <div class="container">

        <div class="section-title">
          <h2>Please fill in the note</h2>
        </div>
        <div class="container px-5">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card border-0 rounded-3 shadow-lg">
                <div class="card-body p-4">
                  <?=form_open_multipart(base_url('home/fungsiTambah'))?>

                  <div class="form-floating mb-3">
                    <input name="Title" class="form-control" id="title" type="text" placeholder="Title"
                      data-sb-validations="required" />
                    <label for="title">Title</label>
                    <div class="invalid-feedback" data-sb-feedback="title:required">Title is required.</div>
                  </div>

                  <div class="form-floating mb-3">
                    <textarea name="Description" class="form-control" id="description" type="text" placeholder="Description"
                      style="height: 10rem;" data-sb-validations="required"></textarea>
                    <label for="description">Description</label>
                    <div class="invalid-feedback" data-sb-feedback="description:required">Description is required.</div>
                  </div>

                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->


    <section id="gallery" class="gallery">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Your Note</h2>
    </div>
  </div>

  <div class="py-2">
    <div class="container">
      <div class="row hidden-md-up">
        <?php foreach ($queryAllNotes as $row) { ?>
        <div class="col-md-4 mb-4">
          <div class="card p-4" style="height: 305px;">
            <div class="card-block">
              <h4 class="card-title" style="font-size: 21px; height: 51px">
                <?php echo $row->title ?>
              </h4>
              <h6 class="card-subtitle text-muted text-md mb-2" style="font-size: 13px;">Created:
                <?php echo $row->date_created ?>
              </h6>
              <h6 class="card-subtitle text-muted text-xs mb-3" style="font-size: 13px;">Updated:
                <?php echo $row->date_updated ?>
              </h6>
              <p aria-expanded="false" class="card-text p-y-1 mb-auto" 
              style="font-size: 13px; text-align: justify; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical; height: 100px">
                <?php echo $row->description ?>
              </p>
              <div class="d-flex justify-content-between gap-2 mt-4">
                <div style="padding-top: 8px;">
                  <a>View Full</a>
                </div>
                <div>
                  <a href="<?php echo base_url('/home/fungsiGetNoteById') ?>/<?php echo $row->id ?>"
                    class="btn btn-primary">Edit</a>

                  <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->id ?>"
                    class="btn btn-danger">Delete</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

  </div>
</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>NoteCity</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>