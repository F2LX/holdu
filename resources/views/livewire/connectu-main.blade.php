<div>
    <form class="d-flex mb-3 mt-4 gap-2" wire:submit="search">
        <input type="text" id="" wire:model="keyword" class="form-control" placeholder="Search Here...">
        <button type="submit" class="btn btn-primary px-5 py-1">
            <span class="material-symbols-outlined">
                search
                </span>
        </button>
    </form>

    @if (!$users)
    <div class="w-100">
        <form wire:submit="save">
            <textarea class="w-100 textarea-connectu" wire:model="content" id="" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
    @endif
    
    @if ($users)
    <a class="btn btn-primary mb-3 mt-1" href="#posts">See Posts</a>
        @foreach($users as $user)
        <div class="w-100 bg-white p-3 d-flex align-items-center">
            <img class="thumbnail-connectu" src="{{ asset("img/".$user->category) }}" alt="">
            <p class="fw-bold">{{ $user->username }}</p>
        </div>
        @endforeach
        <div x-intersect.full="$wire.loadMoreUsers()" class="w-100 d-flex justify-content-center align-items-center text-center p-4">
            <div wire:loading wire:target="loadMoreUsers" 
                  class="loading-indicator">
                     Loading more posts...  
            </div>
          </div>
    @endif

    <div class="posts w-100" id="posts">
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
                                    <input type="text" class="form-control form-comment" wire:model="replymsgs.{{ $post->id }}" placeholder="Comment Here">
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
        <div x-intersect.full="$wire.loadMore()" class="w-100 d-flex justify-content-center align-items-center text-center p-4">
            <div wire:loading wire:target="loadMore" 
                  class="loading-indicator">
                     Loading more posts...  
            </div>
          </div>
    </div>
    @script
        <script>
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('reply-btn')) {
                    const commentId = event.target.dataset.commentId;
                    const replyForm = document.getElementById(`reply-form-${commentId}`);
                    if (replyForm) {
                        replyForm.style.display = replyForm.style.display === 'none' ? 'flex' : 'none';
                    }
                }
            });
           
        </script>
    @endscript
</div>
