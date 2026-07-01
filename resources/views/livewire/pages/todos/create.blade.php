<div>
    <h1>Create Todo</h1>
    <form wire:submit="save">
        <div>
            <label>Title</label>
            <input type="text" wire:model="title">
            @error('title') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Description</label>
            <textarea wire:model="description"></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('todos.index') }}" wire:navigate>Back</a>
</div>
