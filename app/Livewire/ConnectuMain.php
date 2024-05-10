<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class ConnectuMain extends Component
{
    public $content;
    #[Url]
    public $keyword;
    public $is_search;
    public $on_page=5;
    public $user_on_page;

    public $posts=[];
    public $users=[];
    
    public $commentmsgs=[];
    public $replymsgs=[];

    public $userId;

    public function delete($postId)
    {
        $post = Post::find($postId);
        if (auth()->user()->id == $post->user_id) {
            Post::destroy($postId);
        }
    }

    public function deletecomment($comId)
    {
        $com = Comment::find($comId);
        if (auth()->user()->id == $com->user_id) {
            Comment::destroy($comId);
        }
    }

    public function loadMore(): void  
    {  
        $this->on_page += 5;  
    }  
    public function loadMoreUsers(): void  
    {  
        $this->user_on_page += 5;  
    } 
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
        if ($this->keyword !== "") {
            $this->posts = Post::where('content', 'like', "%$this->keyword%")
                ->latest() // Urutkan berdasarkan tanggal terbaru
                ->take($this->on_page)
                ->get();

            $this->users = User::where('username', 'like', "%$this->keyword%")
                    ->latest() // Urutkan berdasarkan tanggal terbaru
                    ->take($this->user_on_page)
                    ->get();
        } else {
            $this->posts=[];
            $this->users=[];
        }
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
            $reply->content=$this->replymsgs[$postId];
            $reply->user_id=auth()->user()->id;
            $reply->post_id=$postId;
            $reply->parent_id=$parentId;
            $reply->save();
        }
        
        $this->replymsgs[$postId]="";
        $this->commentmsgs[$postId]="";
        $this->dispatch('comment-posted');
    }

    public function render()
    {   
        if ($this->userId) {
            $this->posts=Post::where('user_id',$this->userId)->with(['user', 'comments'])
            ->orderBy('created_at', 'desc')
            ->take($this->on_page)
            ->get();
            
            return view('livewire.connectu-main',[
                "posts" => $this->posts,
                "is_profile" => true,
            ]);
        }
        if ($this->keyword == "") {
            $this->posts = Post::with(['user', 'comments'])
                ->orderBy('created_at', 'desc')
                ->take($this->on_page)
                ->get();

            return view('livewire.connectu-main',[
                'posts' => $this->posts,
                'is_profile' => false
            ]);
        } else {
            return view('livewire.connectu-main',[
                'posts' => $this->posts,
                'users' => $this->users,
                'is_profile' => false
            ]);
        }
    }
}
