@extends('ui.home')

@section('content')
    <div class="container">
        <h3 class="fw-bold mb-0 mt-4">Meditation Track</h3>
        <p>Your Journey to Inner Peace with HoldU</p>

        <div class="container mt-5">
            <h2>Nature Sound</h2>
            <div class="n-sound mt-3">
                <div class="d-flex medicolors align-items-center w-100 p-3 rounded-4 bg-light">
                    <h2 class="w-100 text-light">Forest</h2>
                    <audio class="w-100" id="player" controls>
                        <source src="{{ asset("Music/Forest.mp3") }}" type="audio/mp3" />
                    </audio>
                </div>
                <div class="d-flex medicolors align-items-center w-100 p-3 rounded-4 bg-light">
                    <h2 class="w-100 text-light">Wind</h2>
                    <audio class="w-100" id="player" controls>
                        <source src="{{ asset("Music/Wind.mp3") }}" type="audio/mp3" />
                    </audio>
                </div>
                <div class="d-flex medicolors align-items-center w-100 p-3 rounded-4 bg-light">
                    <h2 class="w-100 text-light">Peaceful Nature</h2>
                    <audio class="w-100" id="player" controls>
                        <source src="{{ asset("Music/Nature.mp3") }}" type="audio/mp3" />
                    </audio>
                </div>
                <div class="d-flex medicolors align-items-center w-100 p-3 rounded-4 bg-light">
                    <h2 class="w-100 text-light">Rainfall</h2>
                    <audio class="w-100" id="player" controls>
                        <source src="{{ asset("Music/Rainfall.mp3") }}" type="audio/mp3" />
                    </audio>
                </div>
                <div class="d-flex medicolors align-items-center w-100 p-3 rounded-4 bg-light">
                    <h2 class="w-100 text-light">Flute</h2>
                    <audio class="w-100" id="player" controls>
                        <source src="{{ asset("Music/Flute.mp3") }}" type="audio/mp3" />
                    </audio>
                </div>
            </div>
        </div>

    </div>
@endsection