<?php

namespace App\Livewire\Posts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    public $todos = [];
    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.posts.create-post')->with(['author' => Auth::user()->name,]);
    }
}
