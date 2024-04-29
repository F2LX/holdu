@extends('ui.home')

@section('content')
{{-- Carousel --}}
<div id="carouselExampleIndicators" class="carousel slide mt-3 rounded overflow-hidden m-3">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset("img/carousel-1.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset("img/carousel-2.jpg") }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset("img/carousel-3.jpg") }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
</div>
{{-- End carousel --}}
<div class="container-fluid p-0">
  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md order-md-1 d-flex justify-content-center">
        <img class="home-shaming" src="img/Addiction.png" alt="">
      </div>
      <div class="col-md order-md-2">
        <p>Sometimes</p>
        <h3>Life Can Be Stressful</h3>
        <p>In life's storms, HoldU offers solace and support amidst overwhelming stress. Navigate with personalized tools, expert guidance, and a compassionate community. Rediscover inner calm and serenity with us.</p>
      </div>
    </div>
</div>
  
  <h1 class="ms-4 mt-5 fw-bold stroke-white">Your life does matters.</h1>
  
  <div class="container-fluid bg-custom-home border rounded-1">
    <div class="row align-item-center">
      <div class="col-md order-md-1 d-flex justify-content-center pt-4">
        <img class="home-shaming" src="img/Body_shaming.png" alt="">
      </div>
      <div class="col-md order-md-2">
        <p class="mb-0 mt-5">But,</p>
        <h2 id="holducan">Hold U can</h2>
        <p class="mb-4">With our latest technology and powerful AI. Hold U can makes you feel better. <br> Find your inner peace now with our latest meditation guide and daily diaries.</p>
        <p>Hey,<br>
          I had a bad day. No one wants to be my friend. <br> 
          I’m feeling lonely. I really need someone who wants to hear my story.</p>
      </div>
    </div>
  </div>
  
  <div class="container-xl mt-5">
    <div class="row">
      <div class="col-md order-md-1 d-flex justify-content-center">
        <img class="w-100" src="img/image 2.png" alt="">
      </div>
      <div class="col-md order-md-2">
        <h2 class="fw-bold">Meet Sana</h2>
        <p>Your latest AI Companion in mental wellness. <br> With empathy and expertise, Sana provides personalized support and guidance on your journey to well-being. Engage in meaningful conversations, gain insights, and discover new paths towards inner peace with Sana, your trusted companion for mental wellness.</p>
      </div>
    </div>
  </div>
  
  <div class="container-xl mt-5">
    <div class="row align-items-center">
      <div class="col-md order-md-1">
        <h2 class="fw-bold">Machine Learning</h2>
        <p>Experience the power of predictive mood analysis with Sana, our cutting-edge machine learning companion. Discover how Sana utilizes advanced algorithms to anticipate your mood, offering personalized support and guidance tailored to your emotional well-being. Say hello to a new era of mental wellness with Sana by your side.</p>
      </div>
      <div class="col-md order-md-2 d-flex justify-content-center">
        <img class="home-shaming" src="img/SanaPic 6.png" alt="">
      </div>
    </div>
  </div>
  
  <div class="container-xl mt-5">
    <div class="row align-items-center">
      <div class="col-xl order-xl-1 d-flex justify-content-center">
        <img class="mushroom-pic" src="img/image 3.png" alt="">
      </div>
      <div class="col-xl order-xl-2">
        <h2 class="fw-bold">ConnectU</h2>
        <p>Where Minds Unite. Dive into a vibrant social media forum within HoldU's core features. Connect, engage, and share with like-minded individuals, fostering meaningful connections and conversations centered around mental wellness and personal growth.</p>
      </div>
    </div>
  </div>
</div>
@endsection