<?php

namespace App\Livewire\Posts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    public $todos = [];
    public $todo = '';

    public function mount()
    {
    }

    public function add()
    {
        // $this->todos[] = $this->todo;
        // $this->todo = '';
        // $this->reset('todo');

        $this->todos[] = $this->pull('todo');
    }

    public function render()
    {
        return view('livewire.posts.create-post')->with(['author' => Auth::user()->name,]);
    }
}
