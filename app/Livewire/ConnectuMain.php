<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Comment;

class ConnectuMain extends Component
{
    public $content;
    public $search;
    public $paginate=15;
    
    public $commentmsgs=[];
    public $replymsgs=[];
    public function save()
    {
        $post = new Post;
        $post->user_id=auth()->user()->id;
        $post->content=$this->content;
        $post->save();
        $this->content="";
    }
    public function search()
    {
        // Search function here
    }
    public function comment($postId,$parentId)
    {   
        if ($parentId == null) {
            $comment=new Comment;
            $comment->content=$this->commentmsgs[$postId];
            $comment->user_id=auth()->user()->id;
            $comment->post_id=$postId;
            $comment->save();
        } else {
            $reply = new Comment;
            $reply->content=$this->commentmsgs[$postId];
            $reply->user_id=auth()->user()->id;
            $reply->post_id=$postId;
            $reply->parent_id=$parentId;
            $reply->save();
        }
        
        $this->commentmsgs[$postId]="";
        $this->dispatch('comment-posted');
    }

    public function render()
    {
        $posts = Post::with(['user', 'comments'])
             ->orderBy('created_at', 'desc')
             ->get();

        return view('livewire.connectu-main',compact('posts'));
    }
}
