@extends('ui.home')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center bg-primary pt-4 pb-4 rounded-5">
        <div class="col-5 d-flex flex-column justify-content-center">
            <div class="rounded-5 d-flex align-item-center justify-content-center">
                <img class="info-pic" src={{ asset("img/".$user->category) }} alt="">
            </div>
        </div>
        <div class="col-7 d-flex flex-column p-0">
            <div class="d-flex flex-row gap-3 align-items-center mb-2 flex-wrap">
                <h4 class="fw-bold text-light mb-0">{{ $user->username }}</h4>
                @if ($user->is_verified)
                <div class="d-flex flex-row align-items-center rounded-5 bg-success p-1">
                    
                    <span class="material-symbols-outlined fs-mini">
                        check
                        </span>
                    <p class="mb-0 fs-mini">Psychologist</p>
                   
                </div>
                @endif
            </div>
            <h6 class="text-light">Member since {{ $user->created_at }}</h6>
        </div>
    </div>

    @livewire('connectu-main', ['userId' => $user->id])
</div>
    

@endsection