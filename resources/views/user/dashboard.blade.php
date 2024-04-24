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

<div class="container d-flex justify-content-center mb-5">
  <div class="comment-box">
    <div class="row justify-content-center align-items-center gap-4">
      <div class="col bg-light rounded-4 p-3 pb-0">
        <div class="d-flex flex-row align-items-center">
          <img src="img/Tomatoes.png" class="mushroom" alt="">
          <h5 class="ms-3 mb-0">Tomato</h5>
        </div>
        <p class="mb-1 mt-2">Just wanted to share a little moment of joy from my day. Today, I stumbled upon a beautiful patch of wildflowers on my walk home from work. It might seem small, but it really brightened my day and reminded me to appreciate the beauty in the world around us. Sometimes it's the little things that make all the difference. 🌼 #Gratitude #NatureWalk</p>
        <p class="fs-6 mb-1">129 replies</p>
      </div>
      <div class="col bg-light rounded-4 p-3 pb-0">
        <div class="d-flex flex-row align-items-center flex-wrap">
          <img src="img/Mushroom.png" class="mushroom" alt="">
          <h5 class="ms-3 mb-0">Mushroom</h5>
          <div class="ms-4 d-flex flex-row align-items-center bg-primary rounded-5 p-2 text-light">
            <span class="material-symbols-outlined">
              check
              </span>
            <h5 class="mb-0">Psychologist</h5>
          </div>
        </div>
        <p class="mb-1 mt-2">Life can be a balancing act, but today I found a moment of peace amidst the chaos. Took some time to meditate and center myself, and it made all the difference. Remember to prioritize self-care and find moments of stillness in your day. Your mental well-being is worth it. 🧘‍♂️ #SelfCare #Mindfulness</p>
        <p class="fs-6 mb-1">129 replies</p>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center rounded-4 connect-box flex-column text-light">
      <p class="fs-4">More At <br>
        ConnectU</p>
        <a href="#"><span class=" text-light material-symbols-outlined arrow-icon">
          arrow_circle_right
          </span> </a>  
    </div>
  </div>
</div>

    
@endsection