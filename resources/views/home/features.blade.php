@extends('ui.home')

@section('content')
    <div class="container d-flex justify-content-center flex-column">
        <h1 class="text-center fw-bold mt-10">Our Features</h1>
        <h6 class="text-center mt-3">Unleash your creativity with a visual colaboration <br>
             platform that enables effective ideation</h6>      
        <div class="container d-flex flex-column gap-4 mt-5">
            <div class="f-wrapper">
                <a class="f-box rounded-4" href="/connectu">
                    <div class="">
                        <img class="rounded-3 mushroom" src="img/Community.png" alt="">
                        <h3>ConnectU</h3>
                        <p class="mb-0">Wanna be yours</p>
                    </div>
                </a>
                <a href="/chat" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="img/SanaPic 3.png" alt="">
                        <h3>Sana</h3>
                        <p class="mb-0">Understanding your feelings every time</p>
                    </div>
                </a>
                <a href="/reminder" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="img/Reminder.png" alt="">
                        <h3>Reminder</h3>
                        <p class="mb-0">Try my best to be with you</p>
                    </div>
                </a>
            </div>             
            <div class="f-wrapper">
                <a class="f-box rounded-4" href="/journal">
                    <div class="">
                        <img class="rounded-3 mushroom" src="img/Journaal.png" alt="">
                        <h3>Journal</h3>
                        <p class="mb-0">Wanna be yours</p>
                    </div>
                </a>
                <a href="/chat" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="img/SanaPic 3.png" alt="">
                        <h3>Sana</h3>
                        <p class="mb-0">Understanding your feelings every time</p>
                    </div>
                </a>
                <a href="#" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="img/Tomato.png" alt="">
                        <h3>Mood Analysis</h3>
                        <p class="mb-0">Try my best to be with you</p>
                    </div>
                </a>
            </div>             
        </div>
    </div>
@endsection