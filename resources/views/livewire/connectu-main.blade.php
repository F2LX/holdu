<div>
    <form class="d-flex mb-3 mt-4 gap-2" wire:submit="search">
        <input type="text" name="" id="" wire:model="keyword" class="form-control" placeholder="Search Here...">
        <button type="submit" class="btn btn-primary px-5 py-1">
            <span class="material-symbols-outlined">
                search
                </span>
        </button>
    </form>


    <div class="w-100">
        <form wire:submit="save">
            <textarea class="w-100 textarea-connectu" wire:model="content" id="" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>

    <div class="posts w-100" wire:poll.3s>
        @foreach ($posts as $post)
        <div class="post">
            <div class="d-flex align-items-center post-header">
                <img class="thumbnail-connectu" src="{{ asset("img/".$post->user->category) }}" alt="">
                <p class="m-0 fw-bold">{{ $post->user->username }}</p>
            </div>
            
            <p>{{ $post->content }}</p>

            <button class="btn btn-warning btn-show-comment-form">Comment</button>

            <div class="w-100 d-flex flex-direction-row flex-wrap">
                @foreach($post->comments as $comment)
                <div class="w-100">
                    <p><span class="fw-bold">{{ $comment->user->username }}</span> {{ $comment->content }}</p>
                </div>
                @endforeach
            </div>
            <form id="comment-form-{{ $post->id }}" wire:submit="comment({{ $post->id }})" class="w-100 d-flex gap-2">
                <input type="text" class="form-control form-comment" wire:model="commentmsg" placeholder="Comment Here">
                <button class="btn btn-primary btn-send" type="submit">Send</button>
            </form>
        </div>
        @endforeach
    </div>

    @script
    <script src="">
        document.querySelectorAll('.btn-show-comment-form').forEach(btn => {
        btn.addEventListener('click', () => {
        // Dapatkan ID posting dari data-attribute atau sesuai kebutuhan
            const postId = btn.dataset.postId;

        // Temukan form komentar yang sesuai dengan ID posting dan tampilkan
            const commentForm = document.getElementById(`comment-form-${postId}`);
            if (commentForm) {
                    commentForm.style.display = 'block';
                }
            });
        });
    </script>
    @endscript
</div>
