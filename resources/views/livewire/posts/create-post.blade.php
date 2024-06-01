<div class="px-5">
    <form wire:submit="save">
        <div class="my-5">
            <input class="w-64" type="text" wire:model="title">
        </div>
        <div class="mb-10 w-64">
            <textarea class=" w-64" wire:model="content"></textarea>
        </div>
        <div>
            <button class="border border-red-500 py-2 px-3 mb-2" type="submit">Save</button>
            <button class="border border-x-blue-600 py-2 px-3 mb-2" type="button" wire:click="$commit">Refresh</button>
            <button class="border border-b-violet-950 py-2 px-3 mb-2" type="button" x-on:click="$wire.$refresh">Alpine Refresh</button>
        </div>
    </form>
</div>
