@extends('layout.layout')

@section('title', 'Luckycious')

<div class="ftco-blocks-cover-1">
      <div class="site-section-cover half-bg">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
              <h1 class="mb-5 text-primary font-weight-bold"  data-aos="fade-up"><?php echo $text ?>.</h1>
              <p data-aos="fade-up" data-aos-delay="100"><a href="{{url('#intro')}}" class="more-29291">Click Me</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">

@section('container')

<div class="site-section bg-tertiary" id="intro">
    <center>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 float-center">
          <img src="assets/images/luckyciousFT.png"></br></br></br>
            <h2 class="text-primary mb-3 font-weight-bold">What I've been up to.</h2>
            <p>Here's a selection of some recent work.</p>
            <p data-aos="fade-up" data-aos-delay="100"><a href="{{url('#work')}}" class="more-29291">Scroll Now</a></p></br></br></br>
        </div>
      </div>
    </div>
    </center>
</div>

    <div class="site-section" id="work">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12"> 

            <div class="owl-carousel slide-one-item">

              <div class="d-md-flex testimony-29101 align-items-stretch">
                  <div class="row justify-content-center">
                     <div class="col-md-8">
                         <img src="assets/images/0.png" alt="Image" class="img-fluid">
                     </div>                     
                  </div>
              </div>

              <div class="d-md-flex testimony-29101 align-items-stretch">
                  <div class="row justify-content-center">
                     <div class="col-md-8">
                         <img src="assets/images/1.png" alt="Image" class="img-fluid">
                     </div>
                  </div>
              </div>

              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="text">
                  <blockquote>
                  <h5 class="text-dark mb-3 font-weight-bold">Interface Programming Website.</h5>
                    <p>&ldquo;As an exploration of product design and architecture, I have worked on an idea for a programming tutorial website. It really challenges thinking through product design but it ultimately works!&rdquo;</p>
                    
                  </blockquote>
              </div> 
            </div> 
            
            
          </div>
          
        </div>  
      </div>
    </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12"> 

            <div class="owl-carousel slide-one-item">

              <div class="d-md-flex testimony-29101 align-items-stretch">
                  <div class="row justify-content-center">
                     <div class="col-md-8">
                         <img src="assets/images/2.jpg" alt="Image" class="img-fluid">
                     </div>                     
                  </div>
              </div>

              <div class="d-md-flex testimony-29101 align-items-stretch">
                  <div class="row justify-content-center">
                     <div class="col-md-8">
                         <img src="assets/images/3.jpg" alt="Image" class="img-fluid">
                     </div>
                  </div>
              </div>

              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="text">
                  <blockquote>
                  <h5 class="text-dark mb-3 font-weight-bold">Interface Company Website.</h5>
                    <p>&ldquo;As an exploration of product design and architecture, I have worked on an idea for a Company website. It really challenges thinking through product design but it ultimately works!&rdquo;</p>
                    
                  </blockquote>
              </div> 
            </div> 
            
            
          </div>
        </div>  
      </div>
    </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12"> 

            <div class="owl-carousel slide-one-item">

              <div class="d-md-flex testimony-29101 align-items-stretch">
                  <div class="row justify-content-center">
                     <div class="col-md-8">
                         <img src="assets/images/4.jpg" alt="Image" class="img-fluid">
                     </div>                     
                  </div>
              </div>

              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="text">
                  <blockquote>
                  <h5 class="text-dark mb-3 font-weight-bold">Eror Code Website.</h5>
                    <p>&ldquo;As an exploration of product design and architecture, I have worked on an idea for error codes on a website. It really challenges thinking through product design but it ultimately works!&rdquo;</p>
                    
                  </blockquote>
              </div> 
            </div> 
            
            
          </div>
        </div>  
      </div>
    </div>
    </div>

@endsection

