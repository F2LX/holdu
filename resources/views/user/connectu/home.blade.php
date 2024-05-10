@extends('ui.home')

@section('content')

<div class="container">


    <div class="d-flex flex-wrap w-100">
        <div class="wider p-2">
            @livewire('connectu-main')
        </div>
        <div class="sidebar p-2">
            <div class="category-bar mt-4">
                <h2>My Profile</h2>
                <ul>
                    <li>Username: {{ auth()->user()->username }}</li>
                </ul>
            </div>
            <a href="/chat">
                <div class="banner-bar">
                    <img class="banner-pic" src="{{ asset("img/SanaPic 3.png") }}" alt="">
                    <h3>Chat with Sana</h3>
                    <p>Your AI Companion at HoldU. Empathetic, insightful, and always there for you on your journey to wellness. Let Sana illuminate your path to inner peace and growth.</p>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection