<div>
    <h1>Edit Todo</h1>
    <form wire:submit="update">
        <div>
            <label>Title</label>
            <input type="text" wire:model="title">
            @error('title') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Description</label>
            <textarea wire:model="description"></textarea>
        </div>
        <div>
            <label>Completed</label>
            <input type="checkbox" wire:model="is_completed">
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('todos.index') }}" wire:navigate>Back</a>
</div>
