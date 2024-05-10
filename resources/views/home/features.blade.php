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
                        <img class="rounded-3 mushroom" src="{{ asset("img/Community.png") }}" alt="">
                        <h3>ConnectU</h3>
                        <p class="mb-0">Where people from all over connect easily.</p>
                    </div>
                </a>
                <a href="/chat" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="{{ asset("img/SanaPic 3.png") }}" alt="">
                        <h3>Sana</h3>
                        <p class="mb-0">Your virtual companion for mental well-being.</p>
                    </div>
                </a>
                <a href="/reminder" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="{{ asset("img/Reminder.png") }}" alt="">
                        <h3>Mood History</h3>
                        <p class="mb-0">Track your emotions, gain insights.</p>
                    </div>
                </a>
            </div>             
            <div class="f-wrapper">
                <a class="f-box rounded-4" href="/journal">
                    <div class="">
                        <img class="rounded-3 mushroom" src="{{ asset("img/Journaal.png") }}" alt="">
                        <h3>Journal</h3>
                        <p class="mb-0">Reflect, record, and track your thoughts and feelings with ease.</p>
                    </div>
                </a>
                <a href="/meditation" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="{{ asset("img/Meditation.png") }}" alt="">
                        <h3>Meditation</h3>
                        <p class="mb-0">Find peace and clarity through guided meditation sessions.</p>
                    </div>
                </a>
                <a href="#" class="f-box rounded-4">
                    <div>
                        <img class="rounded-3 mushroom" src="{{ asset("img/Tomato.png") }}" alt="">
                        <h3>Mood Analysis</h3>
                        <p class="mb-0">Understand your emotions better with insightful analysis.</p>
                    </div>
                </a>
            </div>             
        </div>
    </div>   
@endsection