<div>
    <h1>Todo List</h1>
    <a href="{{ route('todos.create') }}" wire:navigate>Create Todo</a>

    <ul>
        @foreach($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong>
                <a href="{{ route('todos.view', $todo) }}" wire:navigate>View</a>
                <a href="{{ route('todos.edit', $todo) }}" wire:navigate>Edit</a>
                <a href="{{ route('todos.delete', $todo) }}" wire:navigate>Delete</a>
            </li>
        @endforeach
    </ul>
</div>
