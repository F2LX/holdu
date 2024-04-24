@extends('ui.home')

@section('content')

<div class="container">
        
    <div class="d-flex">
        <div class="wider p-2">
            <form class="d-flex" action="/connectu/search/req" method="get">
                <input type="text" name="" id="" class="form-control rounded">
                <button type="submit" class="btn btn-primary px-5 py-1 rounded">
                    <span class="material-symbols-outlined">
                        search
                        </span>
                </button>
            </form>
        

            <div class="w-100">
                <form action="" class="w-100" method="post">
                    <textarea class="w-100 textarea-connectu" name="content" id="" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </form>
            </div>

            <div class="posts w-100">
                <div class="post">
                    <div class="d-flex align-items-center post-header">
                        <img class="thumbnail-connectu" src="{{ asset("img/Tomato.png") }}" alt="">
                        <p class="m-0 fw-bold">Tomato</p>
                    </div>
                    
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium sunt sed mollitia, veritatis delectus rerum nihil exercitationem explicabo eius ipsum quis, molestias vitae voluptas, voluptatum nostrum consequatur quae ratione repellat?</p>
                    <form action="" class="w-100 d-flex">
                        <input type="text" class="form-control form-comment" id="" placeholder="Comment Here">
                        <button class="btn btn-primary btn-send">Send</button>
                    </form>
                </div>
                
                
            </div>
        </div>
        <div class="sidebar p-2">
            <div class="category-bar">
                <h2>Category</h2>
                <ul>
                    <li>Verified Psychologist</li>
                    <li>Posted by HoldU</li>
                    <li>Popular</li>
                    <li>New</li>
                </ul>
            </div>
            <div class="banner-bar">
                <img class="banner-pic" src="{{ asset("img/SanaPic 3.png") }}" alt="">
                <h3>Chat with Sana</h3>
                <p>Your AI Companion at HoldU. Empathetic, insightful, and always there for you on your journey to wellness. Let Sana illuminate your path to inner peace and growth.</p>
            </div>
        </div>
    </div>
</div>

@endsection