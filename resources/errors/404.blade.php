@extends('ui.home')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center align-items-center flex-column mt-5">
            <h1 class="text-center">OOPS!</h1>
            <h1 class="text-center">404-PAGE NOT FOUND</h1>
            <img src="img/bingung.png" class="info-pic" alt="">
            <h6 class="text-center">The page you are looking for ight been removed <br> had its name changed or is temporarily unavailable.</h6>
            <a href="/" class="mt-2 rounded-5 bg-primary p-2">Go To HomePage</a>
        </div>
    </div>
@endsection