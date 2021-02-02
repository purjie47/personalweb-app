<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>Hi, I'm Purbo</title>

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">
                  <span class="toctext">Home</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portofolio">
              <span class="toctext">Portofolio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">
              <span class="toctext">Experience</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#education">
              <span class="toctext">Education
              </span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">
              <span class="toctext">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">
              <span class="toctext">Contacts</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead">
    <div class="container">
      <div class="row align-items-center row-title">
        <div class="col-sm-3 text-center" data-aos="fade-right" data-aos-duration="1500">
            <img src="/img/YEP.jpg" class="img-fluid my-photo" alt="my-photo">
        </div>
        <div class="col-sm-9 text-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="my-name">Hi, I'm <strong>Purbo Ajie</strong></div>
            <div class="caption">Mahasiswa Gunadarma</div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Page Content -->
  <section id="portofolio" class="py-5">
    <div class="container">
     <h3 class="text-center title-section">
       <span class="mw-headline" id="portofolio">
       <strong>PORTOFOLIO</strong>
      </span>
      </h3>
       <p class="text-center font-weight-light mb-5">
         <small>SELECTED LATEST WORKS</small></p>
         <div class="container">
           <div class="grid-row">
             <div class="row">
             <div class="column">
               <img src="https://source.unsplash.com/cZr2sgaxy3Q/400x300" alt="" data-aos="fade-right" data-aos-duration="1500">
               <img src="https://source.unsplash.com/o1SKqmgSDbg/400x500" alt="" data-aos="fade-up" data-aos-duration="1500">
             </div>
             <div class="column">
              <img src="https://source.unsplash.com/PXfJmTRwTZY/400x500" alt="" data-aos="fade-down" data-aos-duration="1500">
              <img src="https://source.unsplash.com/MxVkWPiJALs/400x300" alt="" data-aos="fade-left" data-aos-duration="1500">
            </div>
           </div>
         </div>
    </div>
  </section>

  <!-- Section Experience -->
  <section id="experience" class="py-5 bg-dark text-white">
    <div class="container">
      <h2 class="font-weight-light">
        <span class="mw-headline" id="experience">
        EXPERIENCE
        </span>
      </h2>
      <hr class="mb-5" style="border-top: 1px solid #ffffff">
      @foreach ($experiences as $experiences)
      <div class="row mb-5">
        <div class="col-lg-8">
          <h4 class="mb-0">{{ $experiences->title }}</h4>
          <p class="lead">{{ $experiences->loc }}</p>
          <p>
            {{ $experiences->description }}
          </p>
        </div>
        <div class="col-lg-4 text-lg-right">
          {{ $experiences->since }}
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <section id="education" class="py-5">
    <div class="container">
      <span class="mw-headline" id="education">
      <h2 class="font-weight-light">
        EDUCATION
      </h2>
      </span>
      <hr class="mb-5">
      <div class="row mb-5">
        <div class="col-lg-8">
          <h4 class="mb-0">Universitas Gunadarma</h4>
          <p class="lead">Bachelor Degree of informatic engineering</p>
        </div>
        <div class="col-lg-4 text-lg-right">
          2017 - Present
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="py-5">
    <div class="container">
      <h3 class="text-center about-me mb-5">
        <span class="mw-headline" id="about">
        <strong>ABOUT ME</strong>
        </span>
      </h3>
      <div class="row">
      <div class="col-lg-6 px-5">
        <blockquote class="blockquote">
          <p>
            <i class="fa fa-quote-left fa-2x">
              </i>
            </p>
            <p class="mb-0">
              <i>
                Don't give up!
                Don't you give up!
                Why are you quiting there?
                Just try a little bit harder!
                No, no, no! Don't give up!
                Think all of the people around you and the people cheering you on!
                You're almost there!
                You just have to try!
                You will surely accomplish your goal!
                That's why you should....
                NEVER GIVE UP!! 
              </i>
            </p>
            <footer class="blockquote-footer">Matsuoka
              <cite title="Source Title">Shuzo</cite>
            </footer>
        </blockquote>
      </div>
      <div class="col-lg-6 px-5">
        <h6>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus odit provident a ad magnam dolor eius eveniet quia id quasi nemo aspernatur voluptatem nisi expedita, voluptate hic quod voluptas! Expedita!.
        </h6>
        <p>
          I am looking for posisiton as Web Developer.
        </p>
        <p>
          I Have Skills ... 
        </p>
        <br>
        <a class="btn btn-outline-dark btn-myresume"href="/img/CV PURBO.pdf"
          target="_blank" role="button">
          <i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i> My Resume
        </a>
      </div>
      </div>
    </div>
  </section>

<!-- Section Contact -->
  <section id="contact" class="py-5">
    <div class="container">
     <h3 class="text-center about-me mb-5">
       <span class="mw-headline" id="contact">
       <strong>GET IN TOUCH</strong>
       </span>
      </h3>
     <div class="row">
       <div class="col-lg-3 text-center">
        <a 
          href="https://www.google.co.id/maps/@-6.2431166,106.9712794,15z" 
          target="_blank"> <i class="far fa-map fa-contact-custom fa-4x mb-2"></i></a>
          <p><strong>Go to my Address? Click the icon.</strong></p>
          <p>Jl. Cemara raya No. 24, Jakasampurna, Bekasi</p>
       </div>
       <div class="col-lg-3 text-center">
        <a href="mailto:purboajie47@gmail.com.fa-comments" target="_blank"> 
          <i class="far fa-envelope-open fa-contact-custom fa-4x mb-2"></i></a>
          <p><strong>Email Me</strong></p>
          <p>Just click the icon or send your message to purboajie47@gmail.com</p>
       </div>
       <div class="col-lg-3 text-center">
        <a href="https://api.whatsapp.com/send?phone=081319268468" target="_blank"><i class="far fa-comments fa-contact-custom fa-4x mb-2"></i></a>
        <p><strong>Let's Talk</strong></p>
        <p>Just click the icon or Call my phone number 0813-1926-8468</p>
        
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
      <small>Copyright &copy; DCset</small>
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