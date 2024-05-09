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
                <a href="/mediGuide"><img src="img/Meditation.png" class="sana-pic" alt=""></a>
              </div>
              <a href="/mediGuide"><p class="text-light mb-0 text-desc">Meditation</p></a>
            </div>
            <div class="col rounded d-flex align-items-center justify-content-center align-items-center flex-column wrap-icon-shortcut ">
              <div class="bg-light rounded icon-box text-center d-flex justify-content-center align-items-center">
                <a href="/reminder"><img src="img/Reminder.png" class="sana-pic" alt=""></a>
              </div>
              <a href="/reminder"><p class="text-light mb-0 text-desc">Reminder</p></a>
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

<h3 class="mt-5 mb-5 fw-bold text-center">Post from ConnectU</h3>

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
          <div class="ms-4 d-flex flex-row align-items-center bg-primary rounded-5 text-light fs-5 p-1">
            <span class="material-symbols-outlined">
              check
              </span>
            <p class="mb-0 fs-mini">Psychologist</p>
          </div>
        </div>
        <p class="mb-1 mt-2">Just wanted to share a little moment of joy from my day. Today, I stumbled upon a beautiful patch of wildflowers on my walk home from work. It might seem small, but it really brightened my day and reminded me to appreciate the beauty in the world around us. Sometimes it's the little things that make all the difference. 🌼 #Gratitude #NatureWalk</p>
        <p class="fs-6 mb-1">129 replies</p>
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
{{-- Modals --}}
<div class="modal fade" id="question-1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Mood Analysis</h1>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <h3>  Have you felt low on energy in the past 14 days?</h3>
      </div>
      <div class="modal-footer d-flex flex-row align-items-center justify-content-center">
          <p>Disagree</p>         
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="1" > 
              <span>1</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio"> 
              <input type="radio" name="1" value="2" > 
              <span>2</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="3" > 
              <span>3</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="4" > 
              <span>4</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="5" > 
              <span>5</span>
             </label> 
          </div> 
          <p>Agree</p>
      </div>
      <div class="button mt-4 text-left">
        <button id="submmit1" class="btn btn-primary" data-bs-target="#question-2" data-bs-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="question-2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Mood Analysis</h1>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <h3>Have you had any thoughts of harming yourself or others?</h3>
      </div>
      <div class="modal-footer d-flex flex-row align-items-center justify-content-center">
          <p>Disagree</p>         
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="1" > 
              <span>1</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio"> 
              <input type="radio" name="1" value="2" > 
              <span>2</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="3" > 
              <span>3</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="4" > 
              <span>4</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="5" > 
              <span>5</span>
             </label> 
          </div> 
          <p>Agree</p>
      </div>
      <div class="button mt-4 text-left">
        <button class="btn btn-primary" data-bs-target="#question-3" data-bs-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="question-3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Mood Analysis</h1>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <h3>Are you finding it difficult to concentrate or focus on tasks?</h3>
      </div>
      <div class="modal-footer d-flex flex-row align-items-center justify-content-center">
          <p>Disagree</p>         
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="1" > 
              <span>1</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio"> 
              <input type="radio" name="1" value="2" > 
              <span>2</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="3" > 
              <span>3</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="4" > 
              <span>4</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="5" > 
              <span>5</span>
             </label> 
          </div> 
          <p>Agree</p>
      </div>
      <div class="button mt-4 text-left">
        <button class="btn btn-primary" data-bs-target="#question-4" data-bs-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="question-4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Mood Analysis</h1>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <h3>Are you feeling more irritable or easily frustrated than usual in the past 14 days?</h3>
      </div>
      <div class="modal-footer d-flex flex-row align-items-center justify-content-center">
          <p>Disagree</p>         
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="1" > 
              <span>1</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio"> 
              <input type="radio" name="1" value="2" > 
              <span>2</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="3" > 
              <span>3</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="4" > 
              <span>4</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="5" > 
              <span>5</span>
             </label> 
          </div> 
          <p>Agree</p>
      </div>
      <div class="button mt-4 text-left">
        <button class="btn btn-primary" data-bs-target="#question-5" data-bs-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="question-5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Mood Analysis</h1>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <h3>Have you been feeling more anxious or worried than usual?</h3>
      </div>
      <div class="modal-footer d-flex flex-row align-items-center justify-content-center">
          <p>Disagree</p>         
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="1" > 
              <span>1</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio"> 
              <input type="radio" name="1" value="2" > 
              <span>2</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="3" > 
              <span>3</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="4" > 
              <span>4</span>
             </label> 
          </div> 
          <div class="col text-center"> 
            <label class="radio p-0"> 
              <input type="radio" name="1" value="5" > 
              <span>5</span>
             </label> 
          </div> 
          <p>Agree</p>
      </div>
      <div class="button mt-4 text-left">
        <button class="btn btn-primary" data-bs-target="#welcome" data-bs-toggle="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="welcome" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">WELCOME</h1>
      </div>
      <div class="modal-body">
        <h3>Take a deep breath and embark on your journey to inner peace.</h3>
      </div>
      <div class="button mt-4 d-flex justify-content-center">
        <div>
          <button class="btn btn-primary" data-bs-target="#welcome" data-bs-toggle="modal"><span class=" text-light material-symbols-outlined arrow-icon">
            arrow_circle_right
            </span></button>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- button for modals --}}
{{-- <button class="btn btn-primary" data-bs-target="#question-1" data-bs-toggle="modal">Open first modal</button> --}}
{{-- End of modals --}}

{{-- Radio in modals --}}
{{-- <div class="container mt-5 mb-5 d-flex justify-content-center "> 
  <div class="card"> 
    <div class="p-3"> 
      <div class="first text-center"> 
        <h3 class="mt-2">Thanks you</h3> 
        <p class="text-black-50">Thanks for your order, will be delivered soon</p> 
      </div> 
      <div class="border p-3 rounded"> 
          <div class="row"> 
            <div class="col-md-3"> 
              <label class="radio"> 
                <input type="radio" name="experience" value="Bad Experience" > 
                <span>Bad Experience</span> </label> 
            </div> 
            <div class="col-md-3"> 
                <label class="radio"> <input type="radio" name="experience" value="Good Experience"> 
                  <span>Good Experience</span> </label> 
            </div> 
            <div class="col-md-3"> 
                    <label class="radio"> <input type="radio" name="experience" value="Great Experience" checked> <span>Great Experience</span> </label> 
            </div> 
            <div class="col-md-3"> 
              <label class="radio"> <input type="radio" name="experience" value="Amazing Experience"> <span>Amzng Experience</span> </label> 
            </div> 
          </div> 
        </div> 
        <div class="button mt-4 text-right"> <button class="btn btn-success submit-button">Submit</button> </div> 
    </div> 
  </div> 
</div> --}}
{{-- End Radio --}}

    
@endsection