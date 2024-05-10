@extends('ui.home')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="d-flex align-items-center connect-box w-50 justify-content-center flex-column mt-4 rounded-4 p-3">
            <div class="d-flex justify-content-center mb-3">
                <img class="rounded-3 mushroom" src="{{ asset("img/$user->category") }}" alt="">
            </div>
            <h5>{{ $user->name }}</h5>
            <p>{{ $user->email }}</p>

            <div class="d-flex flex-column w-100 p-4">
                <div class="d-flex flex-row justify-content-between">
                    <p>ConnectU Post:</p>
                    <p>1.900</p>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <p>Subscription Type:</p>
                    <p>Demo Account</p>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <p>Valid Until:</p>
                    <p>Demo Account</p>
                </div>
                @if($user->username)
                <div class="d-flex flex-row justify-content-between">
                    <p>Current Username: </p>
                    <p>{{ $user->username }}</p>
                </div>
                @endif
                
            </div>
            <form action="/profile/username" method="post">
                @csrf
                <button class="btn btn-primary">Generate New Username</button>
            </form>
        </div>

    </div>
@endsection