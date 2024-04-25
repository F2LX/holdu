<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\Post;

class PostList extends Component
{
    public $posts;
    public function render()
    {
        $posts = Post::all();
        return view('livewire.post-list',compact('posts'));
    }
}
