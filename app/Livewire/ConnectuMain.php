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
    
    public $commentmsg;

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
    public function comment($postId)
    {
        $comment=new Comment;
        $comment->content=$this->commentmsg;
        $comment->user_id=auth()->user()->id;
        $comment->post_id=$postId;
        $comment->save();
        $this->commentmsg="";
    }

    public function render()
    {
        $posts = Post::with(['user', 'comments'])
             ->orderBy('created_at', 'desc')
             ->get();

        return view('livewire.connectu-main',compact('posts'));
    }
}
