<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = '';
    public $content = '';

    public function mount()
    {
    }

    public function save()
    {
        Post::create(['title' => $this->title, 'content' => $this->content]);

        // return redirect()->to('/post');
        return redirect('/post');
    }

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}
