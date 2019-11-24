@extends('layout.layout')

@section('title', 'Luckycious')

<div class="ftco-blocks-cover-1">
      <div class="site-section-cover half-bg">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
              <h1 class="mb-5 text-primary font-weight-bold"  data-aos="fade-up">{{$text}}.</h1>
              <p data-aos="fade-up" data-aos-delay="100"><a href="{{url('#contact')}}" class="more-29291">Click Me</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">

@section('container')

<div class="site-section bg-left-half" id="contact">
      <div class="container">       
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="/contact" method="post">
            @csrf
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" id="firstname" name="firstname">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name" id="lastname" name="lastname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address" id="email" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea type="text" class="form-control" placeholder="Write your message." cols="30" rows="10" id="message" name="message"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-5 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>Jl. Dliko Indah Gg 7 No. 99</span></br>
                  <span>Salatiga - Jawa Tengah</span>
                </li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>0822 7801 7187</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>anggianggarajr@gmail.com</span></li>
                <p data-aos="fade-up" data-aos-delay="100"><a href="{{url('#disqus')}}" class="more-29291">Disqus</a></p>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section" id="disqus">
      <div class="container">       
        <div class="row">
          <div class="col-lg-12 mb-5" >
           @include('layout.post')
          </div>
        </div>
      </div>
    </div>
    
@endsection