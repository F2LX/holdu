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
<p class="mt-5 mb-5 fw-bold text-center">How are you feeling today?</p>

<div class="container d-flex justify-content-center">
        <div class="shortcut-box bg-primary ps-5 pe-5 bg-success rounded-5">
            <div class="col rounded d-flex align-items-center justify-content-center flex-column mt-3">
              <div class="bg-light d-flex rounded icon-box justify-content-center">
                <img src="img/SanaPic 5.png" class="sana-pic" alt="">
              </div>
              <p class="text-light">Chat with Sana</p>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center flex-column mt-3">
              <div class="bg-light rounded icon-box text-center">
                <span class="material-symbols-outlined icon-pic ">
                  self_improvement
                </span>
              </div>
              <p class="text-light">Meditation</p>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center flex-column mt-3">
              <div class="bg-light rounded icon-box text-center">
                <span class="material-symbols-outlined icon-pic ">
                  event
                </span>
              </div>
              <p class="text-light">Reminder</p>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center flex-column mt-3">
              <div class="bg-light rounded icon-box text-center">
                <span class="material-symbols-outlined icon-pic ">
                  developer_guide
                </span>
              </div>
              <p class="text-light">My Journal</p>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center flex-column mt-3">
              <div class=" bg-light icon-box text-center rounded">
                <span class=" material-symbols-outlined icon-pic">
                    groups
                </span>
              </div>
              <p class="text-light">ConnectU</p>
            </div>
        </div>   
</div>

<p class="mt-5 mb-5 fw-bold text-center">Post from ConnectU</p>


    
@endsection