@extends('ui.home')

@section('content')
{{-- Carousel --}}
<div id="carouselExampleIndicators" class="carousel slide mt-3 rounded overflow-hidden">
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
<p class="mt-4 fw-bold text-center">How are you feeling today?</p>

<div class="container d-flex justify-content-center">
        <div class="shortcut-box">
            <div class="col rounded d-flex justify-content-center bg-light">
                <img src="img/SanaPic 5.png" class="icon-pic" alt="">
            </div>
            <div class="col rounded d-flex justify-content-center bg-light">
                <img src="img/solar_meditation-round-linear.png" class="icon-pic" alt="">
            </div>
            <div class="col rounded d-flex justify-content-center bg-light">
                <img src="img/iconoir_community.png" class="icon-pic" alt="">
            </div>
            <div class="col rounded d-flex justify-content-center bg-light">
                <img src="img/carbon_reminder.png" class="icon-pic" alt="">
            </div>
            <div class="col rounded d-flex justify-content-center bg-light">
                <img src="img/mingcute_diary-fill.png" class="icon-pic" alt="">
            </div>
        </div>   
</div>

    
@endsection