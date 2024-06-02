<div class="px-5">
    <form wire:submit="save">
        <div class="my-5">
            <input class="w-64" type="text" wire:model="title" wire:keydown.enter="add">
        </div>
        <div class="mb-10 w-64">
            <textarea class=" w-64" wire:model="content"></textarea>
        </div>
        <trix-editor wire:trix-change="$wire.content = $event.target.value"></trix-editor>
        <div>
            <button class="border border-red-500 py-2 px-3 mb-2" type="submit">Save</button>
            <button class="border border-indigo-700 py-2 px-3 mb-2" type="button" wire:click="$commit" wire:confirm="Are you sure you want to refresh this post?">Refresh</button>
            <button class="border border-amber-300 py-2 px-3 mb-2" type="button" x-on:click="$wire.$refresh">Alpine Refresh</button>
            <span wire:loading>Loading...</span>
        </div>
        <div>
            @foreach ($posts as $post)
                <div wire:key="{{ $post->id }}">
                    <h1>Title: {{ $post->title }}</h1>
                    <span>{{ $post->content }}</span>
                    <button class="border border-red-500 px-3 mb-2" wire:click="delete({{ $post->id }})">Delete</button>
                </div>
            @endforeach
        </div>
    </form>
</div>
