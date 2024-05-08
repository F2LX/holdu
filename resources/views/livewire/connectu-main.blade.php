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

    <div class="posts w-100">
        @foreach ($posts as $post)
        <div class="post">
            <div class="d-flex align-items-center post-header">
                <img class="thumbnail-connectu" src="{{ asset("img/".$post->user->category) }}" alt="">
                <p class="m-0 fw-bold">{{ $post->user->username }}</p>
            </div>
            
            <p>{{ $post->content }}</p>
            @if ($post->comments)
            <div class="w-100 d-flex flex-direction-row flex-wrap comment-section">
                @foreach($post->comments as $comment)
                @if($comment->parent_id===null)
                <div class="w-100 comment-wrap">
                    <div class="d-flex">
                        <img class="thumbnail-comment" src="{{ asset("img/".$comment->user->category) }}" alt="">
                        <div class="d-flex flex-direction-column flex-wrap w-100">
                            <p class="w-100 comment-text">
                                <span class="fw-bold">{{ $comment->user->username }}</span> <br>
                                {{ $comment->content }}</p><br>
                                <button class="btn btn-default reply-btn" id="btn-show-form-{{ $comment->id }}" type="button" data-comment-id="{{ $comment->id }}">Reply</button>
                                <form id="reply-form-{{ $comment->id }}" wire:submit="comment({{ $post->id }},{{ $comment->id }})" class="w-100 gap-2" style="display: none ">
                                    <input type="text" class="form-control form-comment" wire:model="commentmsgs.{{ $post->id }}" placeholder="Comment Here">
                                    <button class="btn btn-primary btn-send" type="submit">Send</button>
                                </form>
                                @foreach ($post->comments as $commentReply)
                                    @if ($commentReply->parent_id==$comment->id)
                                    <div class="w-100 comment-wrap ms-2">
                                        <div class="d-flex">
                                            <img class="thumbnail-comment" src="{{ asset("img/".$commentReply->user->category) }}" alt="">
                                            <div class="d-flex flex-direction-column flex-wrap w-100">
                                                <p class="w-100 comment-text">
                                                    <span class="fw-bold">{{ $commentReply->user->username }}</span> <br>
                                                    {{ $commentReply->content }}</p><br>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                {{-- Reply --}}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            @endif
            <form wire:submit="comment({{ $post->id }},null)" class="w-100 d-flex gap-2">
                <input type="text" class="form-control form-comment" wire:model="commentmsgs.{{ $post->id }}" placeholder="Comment here...">
                <button class="btn btn-primary btn-send" type="submit">Send</button>
            </form>
        </div>
        @endforeach
    </div>
    @script
        <script>
            document.querySelectorAll('.reply-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const commentId = btn.dataset.commentId; // Get the commentId from dataset
                    const replyForm = document.getElementById(`reply-form-${commentId}`);
                    
                    if (replyForm) {
                        replyForm.style.display = replyForm.style.display === 'none' ? 'flex' : 'none'; // Toggle the display property
                    }
                });
            });

            $wire.on('comment-posted', () => {
                btn.addEventListener('click', () => {
                    const commentId2 = btn.dataset.commentId; // Get the commentId from dataset
                    const replyForm2 = document.getElementById(`reply-form-${commentId}`);
                    
                    if (replyForm2) {
                        replyForm2.style.display = replyForm2.style.display === 'none' ? 'flex' : 'none'; // Toggle the display property
                    }
                });   
            });             
        </script>
    @endscript
</div>
