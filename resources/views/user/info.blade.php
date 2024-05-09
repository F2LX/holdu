@extends('ui.home')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center bg-primary pt-4 pb-4 rounded-3">
        <div class="col-5 d-flex flex-column justify-content-center">
            <div class="rounded-5 d-flex align-item-center justify-content-center">
                <img class="info-pic" src="img/Tomatoes.png" alt="">
            </div>
        </div>
        <div class="col-7 d-flex flex-column p-0">
            <div class="d-flex flex-row gap-3 align-items-center mb-2 flex-wrap">
                <h4 class="fw-bold text-light mb-0">@tomato11</h4>
                <div class="d-flex flex-row align-items-center rounded-5 bg-success p-1">
                    <span class="material-symbols-outlined fs-mini">
                        check
                        </span>
                    <p class="mb-0 fs-mini">Psychologist</p>
                </div>
            </div>
            <h6 class="text-light">Member since 28 February 2024</h6>
        </div>
    </div>
</div>
    
@endsection