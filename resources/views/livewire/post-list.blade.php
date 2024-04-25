<div class="posts w-100">
    <div class="post">
        <div class="d-flex align-items-center post-header">
            <img class="thumbnail-connectu" src="{{ asset("img/Tomato.png") }}" alt="">
            <p class="m-0 fw-bold">Tomato</p>
        </div>
        
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium sunt sed mollitia, veritatis delectus rerum nihil exercitationem explicabo eius ipsum quis, molestias vitae voluptas, voluptatum nostrum consequatur quae ratione repellat?</p>
            <form action="" class="w-100 d-flex gap-2">
                <input type="text" class="form-control form-comment" id="" placeholder="Comment Here">
                <button class="btn btn-primary btn-send">Send</button>
                @livewire('post-modal')
            </form>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postModal">
                View Post
            </button>
        </div>
    </div>
</div>