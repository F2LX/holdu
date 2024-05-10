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
<h3 class="mt-5 mb-5 fw-bold text-center">How are you feeling today?</h3>

<div class="container d-flex justify-content-center">
        <div class="shortcut-box p-3 rounded-5">
            <div class="col rounded d-flex align-items-center justify-content-center flex-column">
              <div class="bg-light d-flex rounded icon-box justify-content-center align-items-center wrap-icon-shortcut">
                <a href="/chat"><img src="img/SanaPic 5.png" class="sana-pic" alt=""></a>
              </div>
              <a href="/chat"><p class="text-light mb-0 text-desc">Chat Sana</p></a>              
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center align-items-center flex-column wrap-icon-shortcut ">
              <div class="bg-light rounded icon-box text-center d-flex justify-content-center align-items-center">
                <a href="/meditation"><img src="img/Meditation.png" class="sana-pic" alt=""></a>
              </div>
              <a href="/meditation"><p class="text-light mb-0 text-desc">Meditation</p></a>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center align-items-center flex-column wrap-icon-shortcut ">
              <div class="bg-light rounded icon-box text-center d-flex justify-content-center align-items-center">
                <a href="/mood-history"><img src="img/Reminder.png" class="sana-pic" alt=""></a>
              </div>
              <a href="/mood-history"><p class="text-light mb-0 text-desc">Mood History</p></a>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center align-items-center flex-column wrap-icon-shortcut ">
              <div class="bg-light rounded icon-box text-center d-flex justify-content-center align-items-center">
                <a href="/journal"><img src="img/Journaal.png" class="sana-pic" alt=""></a>
              </div>
              <a href="/journal"><p class="text-light mb-0 text-desc">My Journal</p></a>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center align-items-center flex-column wrap-icon-shortcut ">
              <div class="bg-light icon-box text-center rounded d-flex justify-content-center align-items-center">
                <a href="/connectu"><img src="img/Community.png" class="sana-pic" alt=""></a>
              </div>
              <a href="/connectu"><p class="text-light mb-0 text-desc">ConnectU</p></a>
            </div>
        </div>   
</div>

<h3 class="mt-5 mb-5 fw-bold text-center">Try ConnectU</h3>

<div class="container d-flex justify-content-center mb-5">
  <div class="comment-box">
    <div class="row justify-content-center align-items-center gap-4">
      <div class="col bg-light rounded-4 p-3 pb-0">
        <div class="d-flex flex-row align-items-center">
          <img src="img/Tomatoes.png" class="mushroom" alt="">
          <h5 class="ms-3 mb-0">Tomato</h5>
        </div>
        <p class="mb-1 mt-2">Try ConnectU now! You can register and socialize anonymously without limits!</p>
      </div>
      <div class="col bg-light rounded-4 p-3 pb-0">
        <div class="d-flex flex-row align-items-center flex-wrap">
          <img src="img/Mushroom.png" class="mushroom" alt="">
          <h5 class="ms-3 mb-0">Mushroom</h5>
          <div class="ms-4 d-flex flex-row align-items-center bg-primary rounded-5 text-light tag-verified">
            <span class="material-symbols-outlined">
              check
              </span>
            <p class="mb-0">Psychologist</p>
          </div>
        </div>
        <p class="mb-1 mt-2">Get advice from trusted psychologists on ConnectU! Join the limitless community!</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center rounded-4 connect-box flex-column text-light p-3">
      <p class="fs-4">More At <br>
        ConnectU</p>
        <a href="/connectu"><span class=" text-light material-symbols-outlined arrow-icon">
          arrow_circle_right
          </span> </a>  
    </div>
  </div>
</div>
    
@endsection