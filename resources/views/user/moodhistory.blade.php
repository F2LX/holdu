@extends('ui.home')

@section('content')
    <div class="container">
        <h3 class="fw-bold mt-5">Mood History</h3>
        <p>Your mood history are predicted using HoldU's Machine Learning algorithm</p>
    </div>
    <div class="container">
        @foreach($quiz as $q)
        <a href="#" class="connect-box d-flex flex-direction-column align-items-center flex-wrap p-3 rounded-4">
            <h4 class="w-100">{{ $q->score }}</h4>
            <p>{{ $q->date }}</p>
        </a>
        @endforeach
    </div>
@endsection