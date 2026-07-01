<div>
    <h1>{{ $todo->title }}</h1>
    <p>{{ $todo->description }}</p>
    <p>Status: {{ $todo->is_completed ? 'Completed' : 'Pending' }}</p>
    <a href="{{ route('todos.index') }}" wire:navigate>Back to List</a>
</div>
