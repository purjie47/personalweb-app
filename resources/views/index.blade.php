<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi, I'm purbo</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/download.jpg" type="image/x-icon">
    
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/img/download.jpg" width="50" height="50" alt="my-logo" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacs</a>
            </li>  
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead">
    <div class="container">
      <div class="row align-items-center row-title">
        <div class="col-sm-3 text center" data-aos="fade-right" 
        data-aos-duration="1500">
            <img src="/img/YEP.jpg" class="img-fluid my-photo" alt="my-photo">
        </div>
        <div class="col-sm-9 text center" data-aos="fade-up" 
        data-aos-duration="1500">
            <div class="my-name">Hi, I'm <strong>Purbo</strong></div>
            <div class="caption">Just some guy wandering around</div>
        </div>
      </div>
    </div>  
  </header>
  
  <!-- Page Content -->
  <section id="portofolio" class="py-5">
    <div class="container">
     <h3 class="text-center title-section"><strong>PORTOFOLIO
       </strong></h3>
       <p class="text-center font-weight-light mb-5">
         <small>SELECTED LATEST WORKS</small></p>
         <div class="container">
           <div class="row grid-row">
             <div class="column">
               <img src="https://source.unsplash.com/cZr2sgaxy3Q/400x300" alt="">
               <img src="https://source.unsplash.com/o1SKqmgSDbg/400x500" alt="">
             </div>
             <div class="column">
              <img src="https://source.unsplash.com/PXfJmTRwTZY/400x500
              " alt="">
              <img src="https://source.unsplash.com/MxVkWPiJALs/400x400" alt="">
            </div>
           </div>
         </div>
    </div>
  </section>

  <section id="experience" class="py-5 bg-dark text-white">
    <div class="container">
      <h2 class="font-weight-light">
          EXPERIENCE
      </h2>
      <hr class="mb-5" style="border-top: 1px solid #FFFFFF">
      <div class="row mb-5">
        <div class="col-lg-8">
          <h4 class="mb-0">Data Analyst</h4>
          <p class="lead">Blackstone digital agency </p>
            <p>
                reading data and some shit, giving tips to some old man
            </P>
        </div>
        <div class="col-lg-4 text-lg-right">
            Des 2020 - Present
        </div>
      </div>
    </div>
  </section>

  <section id="education" class="py-5">
    <div class="container">
      <h2 class="font-weight-light">
        EDUCATION
      </h2>
      <hr class="mb-5">
      <div class="row mb-5">
        <div class="col-lg-8">
          <h4 class="mb-0">Universitas GUNDAR</h4>
          <p class="lead">Bachelor Degree of informatic engineering</p>
        </div>
        <div class="col-lg-4 text-lg-right">
          2017-Present sadKEK
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="py-5">
    <div class="container">
      <h3 class="text-center about-me mb-5"><strong>ABOUT ME</strong></h3>
      <div class="row">
        <div class="col-lg-6 px-5">
          <blockquote class="blockquote">
            <p>
              <i class="fa fa-quote-left fa-2x">
              </i>
            </p>
            <p>
              <i>
                Menurut buku tatang sutarma kalo manusia itu bisa bernapas lewat hidung
              </i>
            </p>
            <footer class="blockquote-footer">Sule
              <cite title="Source Title">Prikitiw</cite>
          </blockquote>
        </div>
        <div class="col-lg-6 px-5">
          <h6>
            Bercandanya jelek Sleketep
          </h6>
          <p>
          Supir Misterius
          </p>
          <p>
            Insert paragraph about me here
          </p>
          <br>
          <a class="btn btn-outline-dark btn-myresume"href="/img/CONTOH CV.pdf"
          target="_blank" role="button">
          <i class="fas fa-arrow-alt-circle-down" aria-hidden="true">
          </i>
          MY RESUME
        </a>
        </div>
      </div>
    </div>  
  </section>
  
  <section id="contact" class="py-5">
    <div class="container ">
      <h3 class="text-center about me mb-5"><strong>GET IN TOUCH</strong></h3>
      <div class="row">
        <div class="col-lg-3 text-center">
          <a 
          href="https://www.google.com/maps/place/6%C2%B021'57.6%22S+106%C2%B050'14.8%22E/@-6.365989,106.8352473,17z/data=!3m1!4b1!4m9!1m2!10m1!1e2!3m5!1s0x2e69ec139177af6f:0x0!7e2!8m2!3d-6.365989!4d106.837436?authuser=1&hl=id" 
          target="_blank"> <i class="far fa-map fa-contact-custom fa-4x mb-2"></i></a>
          <p><strong>Go to my Address? Click the icon.</strong></p>
          <p>Jl. Kedoya Raya No.53 Rt 04/ Rw 02, Pondok Cina, Beji, Depok</p>
        </div>
        <div class="col-lg-3 text-center">
          <a href="antoniusanggakurniawan@gmail.com" target="_blank"> 
            <i class="far fa-envelope-open fa-contact-custom fa-4x mb-2"></i></a>
            <p><strong>Email Me</strong></p>
            <p>Just click the icon or send your message to antoniusanggakurniawan@gmail.com</p>
        </div>
        <div class="col-lg-3 text-center">
          <a 
          href="https://api.whatsapp.com/send?phone=6281212941016&text=Hi, Angga" 
          target="_blank"><i class="far fa-comments fa-contact-custom fa-4x mb-2">
            </i></a>
              <p><strong>Let's Talk</strong></p>
                <p>Just click the icon or Call my phone number 0812 1294 1016</p>
        </div>
        <div class="col-lg-3 text-center">
          <i class="far fa-clock fa-contact-custom fa-4x mb-2"></i>
                    <p><strong>Working Hours</strong></p>
                    <p>Mon to Sat – 9.00 to 18.00</p>
        </div>
      </div>
    </div>

  </section>

  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright purbo</small>
    </div>
  </footer>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>