@extends('layout.layout')

@section('title', 'Luckycious')

<div class="ftco-blocks-cover-1">
      <div class="site-section-cover half-bg">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
              <h1 class="mb-5 text-primary font-weight-bold"  data-aos="fade-up"><?php echo $text ?>.</h1>
              <p data-aos="fade-up" data-aos-delay="100"><a href="{{url('#about')}}" class="more-29291">Click Me</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">

@section('container')

<div class="site-section about-me" id="about">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6 mb-5 mb-md-0">
           <img src="assets/images/about_1.jpg" alt="Image" class="img-fluid">
         </div>
         <div class="col-md-5 ml-auto">
           <h2 class="text-primary mb-5 font-weight-bold">Hi...</h2>
           <blockquote class="quote-29281">
            <p>
                I'm Anggi Anggara - a student at the Satya Wacana Christian University based in Salatiga, Indonesia. I have a passion for web design and love making for web and mobile devices.
            </p>
           </blockquote></br>
           <h2 class="text-primary mb-5 font-weight-bold">What Can I do...</h2>
           <blockquote class="quote-29281">
            <p>
            <h5 class="text-primary mb-2 font-weight-bold">Design what you want.</h5>
            I like to make it simple. My goal is to focus on typography, content, and convey the message you want to send.
            </p>
            <p>
            <h5 class="text-primary mb-2 font-weight-bold">Develop what you need.</h5>
            I am a developer, so I know how to make your website run on all devices using the latest technology available.
            </p>
           </blockquote>

           <div class="social_29128 white mt-5">
            <a href="{{ url('https://www.facebook.com/AnggiAnggaraJr') }}"><span class="icon-facebook"></span></a>  
            <a href="{{ url('https://www.instagram.com/anggara_ann/') }}"><span class="icon-instagram"></span></a>  
            <a href="{{ url('https://www.linkedin.com/in/anggara-anggi-b36121168/') }}"><span class="icon-linkedin"></span></a>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="site-section bg-tertiary" id="intro">
    <center>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 float-center">
          <img src="assets/images/luckyciousFT.png"></br></br></br>
            <h2 class="text-primary mb-3 font-weight-bold">I Can Help.</h2>
            <p>If you have a project that you want to get started, think you need my help with something or just fancy saying hey, then get in touch.</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="{{ url('/contact') }}" class="more-29291">Message Me</a></p>
        </div>
      </div>
    </div>
    </center>
</div>

@endsection

