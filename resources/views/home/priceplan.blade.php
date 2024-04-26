@extends('ui.home')

@section('content')

<div class="container">
    <div class="d-flex w-100 flex-column justify-content-center align-items-center">
        <h2 class="fw-bold mt-5">Pricing</h2>
    </div>

    <div class="d-flex flex-row w-100 gap-5 mt-5 justify-content-center">
        <div class="fit-content d-flex flex-column bg-light p-4 rounded-4">
            <h2 class="fw-bold text-center">Free</h2>
            <ul class="mt-4">
                <li>Journal</li>
                <li>Reminder</li>
                <li>ConnectU - Mental Wellness 
                    Forum</li>
            </ul>
        </div>
        <div class="fit-content d-flex flex-column bg-success p-4 rounded-4">
            <h2 class="fw-bold text-center">Premium</h2>
            <ul class="mt-4">
                <li>Chat with Sana</li>
                <li>Sana with AI & Machine Learning</li>
                <li>Predictive Mood Analysis For Sana</li>
                <li>Meditation Track</li>
                <li>Journal</li>
                <li>ConnectU - Mental Wellness
                    Forum</li>
                <li>Reminder</li>
            </ul>
            <h5 class="fw-bold text-light">Rp75.000,-/month</h5>
            <h3 class="fw-bold text-light">Rp50.000,-/month</h3>
            <div class="rounded-4 bg-light p-3">
                <h3 class="text-center fw-bold">Subscribe</h3>
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