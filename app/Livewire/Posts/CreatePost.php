<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Js;
use Livewire\Attributes\Renderless;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;
    public $query = '';
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }


    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('delete', $post);
        $post->delete();
        $this->js("alert('Post deleted!')");
    }

    public function save()
    {
        $this->form->store();

        // return redirect()->to('/post');
        return redirect('/post');
    }

    #[Js]
    public function resetQuery()
    {
        return <<<'JS'
            $wire.query = '';
        JS;
    }


    #[Renderless]
    public function incrementViewCount()
    {
        $this->post->incrementViewCount();
    }


    public function render()
    {
        return view('livewire.posts.create-post', [
            'posts' => Auth::user()->posts,
        ]);
    }
}
