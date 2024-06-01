<div>
    <h1>Title: "{{ $title }}"</h1>
    <span>Author: {{ $author }}</span>

    {{-- @foreach ($posts as $post)
        @livewire(PostItem::class, ['post' => $post], key($post->id))

        <livewire:post-item: $post :key="{$post->id}">
    @endforeach --}}

    <input type="text" wire:model="todo" placeholder="Todo...">
    <button wire:click="add">Add Todo</button>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
    <form action="">
        <label for="title">Title:</label>
        <input type="text" id="title" wire:model.live="title">
    </form>
</div>
