@extends('ui.home')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center bg-primary p-3 pt-4 rounded-3">
        <div class="col-4 d-flex flex-column justify-content-center">
            <div class="rounded-5 d-flex align-item-center justify-content-center">
                <img class="info-pic" src="img/Tomatoes.png" alt="">
            </div>
            <h5 class="text-center mt-3 text-light">Member since: 2024</h5>
            <h5 class="text-center text-light">Status : Online</h5>
        </div>
        <div class="col-8 d-flex flex-column justify-content-center">
            <h6 class="mb-0">Username:</h6>
            {{-- <div class="rounded-3 bg-primary p-2 mb-1"> --}}
                <h5 class="mb-0 pt-2 pb-2">Enver Olivier Chandra</h5>
            {{-- </div> --}}
            <h6 class="mb-0">Life quotes:</h6>
            {{-- <div class="rounded-3 bg-primary p-2 mb-1"> --}}
                <h5 class="pt-2 pb-2">Embrace the journey of growth. Every challenge is an opportunity to learn, every setback a chance to rise stronger.</h5>
            {{-- </div> --}}
            <h6 class="mb-0">Total post:</h6>
            {{-- <div class="rounded-3 bg-primary p-2 mb-1"> --}}
                <h5 class="mb-0 pt-2 pb-2">1224 post</h5>
            {{-- </div> --}}
        </div>
    </div>
</div>
    
@endsection