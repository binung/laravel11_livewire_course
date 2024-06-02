<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class Counter extends Component
{
    public $count = 1;
    public $todo = '';

    public function increment()
    {
        $this->count++;
    }

    public function addTodo($todo)
    {
        $this->todo = $todo;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
