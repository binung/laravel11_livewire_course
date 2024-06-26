<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Js;
use Livewire\Attributes\Renderless;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CreatePost extends Component
{
    public PostForm $form;
    public $query = '';
    public Post $post;

    #[Url(history: true)]
    public $search = '';

    use WithFileUploads;
    use WithPagination;


    #[Validate('image|max:1024')]
    public $photo;

    public function mount(Post $post)
    {
        $this->form->setPost($post);
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

        // $this->photo->store(path: 'photos');
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
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->get()
        ]);
    }
}
