<div>
    <h1>{{ $todo }}</h1>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>

    <div x-data="{ todo: '' }">
        <input type="text" x-model="todo">
        <button x-on:click="$wire.addTodo(todo)">Add Todo</button>
    </div>
</div>
