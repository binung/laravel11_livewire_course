<div>
    <form wire:submit="save">
        <input type="text" wire:model="title">
        <textarea wire:model="content"></textarea>
        <button type="submit">Save</button>
        <button type="button" wire:click="$commit">Refresh</button>
    </form>
</div>
