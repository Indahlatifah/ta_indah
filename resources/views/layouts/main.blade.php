


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="images/favicon.png" type="image/gif" />

  <title>Web Pengaduan</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- lightbox Gallery-->
  <link rel="stylesheet" href="{{ asset('home/css/ekko-lightbox.css') }}" />

  <!-- font awesome style -->
  <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
            Web Pengaduan
          </span>
        </a>
        <div class="" id="">

          <!-- <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="gallery.html">Gallery</a>
                <a href="service.html">Service</a>
                <a href="blog.html">Blog</a>
              </div>
            </div>
          </div> -->
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img_container">
            <div class="img-box">
              <img src="{{ asset('home/images/rsz.jpg') }}" class="" alt="...">
            </div>
          </div>
        </div>
       <!--  <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="images/b4.jpg" class="" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="img_container">
            <div class="img-box">
              <img src="images/slider-bg.jpg" class="" alt="...">
            </div>
          </div>
        </div> -->
      </div>
      <div class="carousel_btn_box">
       <!--  <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <!-- <span class="sr-only">Previous</span> --> -->
        </a>
       <!--  <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i> -->
          <!-- <span class="sr-only">Next</span> -->
        </a>
      </div>
    </div>
    <div class="detail-box">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="inner_detail-box">
          <h1>
            Website Pengaduan dan<br>
           Aspirasi Mahasiswa
          </h1>
          <p>
        Buat laporan pengaduan atau aspirasi anda disini dengan aman tanpa takut karena identitas anda akan disamarkan.
          <div>
            <a href="/login" class="slider-link">
            LOGIN
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- about section -->

  <section class="about_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('home/images/tedc.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
             Politeknik TEDC adalah sebuah perguruan tinggi vokasi profesional yang berfokus bidang rekayasa dan bisnis untuk melahirkan tenaga ahli yang dibutuhkan oleh dunia usaha/ industri, perusahaan nasional maupun internasional.
            </p>
            <a href="https://home.poltektedc.ac.id/">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Tutorial
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="img/hp.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Login
              </h5>
              <p>
              Login dengan username dan password anda adalah NIM. Jangan lupa untuk mengubah password setelah berhasil login.
              </p>
             
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="img/form.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Buat Laporan
              </h5>
              <p>
                Tulis laporan dalam bentuk pengaduan maaupun aspirasi dan pilih bidang tujuan, sertakan foto bukti laporan jika ada.
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="img/wait.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
               Terima Tanggapan
              </h5>
          
              <p>

             Bidang terkait akan menerima laporan tanpa mengetahui identitas pelapor, harap tunggu tanggapan dari bidang terkait. 
              </p>
             
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end service section -->



  

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row info_main_row">
        {{-- <div class="col-md-6 col-lg-3">
          <div class="info_insta">
            <h4>
              <a href="index.html" class="navbar-brand m-0 p-0">
                <span>
                  Shapel
                </span>
              </a>
            </h4>
            <p class="mb-0">
              Asperiores at, error, delectus aut voluptatem provident cum quam magni necessitatibus molestias eveniet reprehenderit maiores voluptate.
            </p>
          </div>
        </div> --}}
        <div class="col-md-6 col-lg-4">
          <div class="info_detail">
            <h4>
              Alamat
            </h4>
            <p class="mb-0">
              Jl. Pesantren No.9, Cihanjuang, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40513
              {{-- when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to --}}
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <h4>
            Contact Us
          </h4>
          <div class="info_contact">
            <a href="https://www.google.com/maps/d/viewer?mid=1ilaaOq9LAJN2NlR3tpiXtEY8hYQ&hl=in&ll=-6.873629000000004%2C107.56213900000002&z=17">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call 0226632645
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope"></i>
              <span>
            info@poltektedc.ac.id
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <h4>
            Follow Us
          </h4>
          <div class="social_box">
            <a href="https://web.facebook.com/politeknik.tedc/?_rdc=1&_rdr">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/PoliteknikTEDC">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://id.linkedin.com/company/politeknik-tedc-bandung">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/politekniktedcbandung/?hl=id">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Created With Love
        <a href="https://html.design/">by Indah Latifah</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- lightbox Gallery-->
  <script src="js/ekko-lightbox.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>

</html>