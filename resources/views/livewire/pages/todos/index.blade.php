<div>
    <h1>Todo List</h1>

    @can(\App\Enums\PermissionEnum::CREATE_TODOS->value)
        <a href="{{ route('todos.create') }}" wire:navigate>Create Todo</a>
    @endcan

    <ul>
        @foreach($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong>
                <a href="{{ route('todos.view', $todo) }}" wire:navigate>View</a>

                @can(\App\Enums\PermissionEnum::EDIT_TODOS->value)
                    <a href="{{ route('todos.edit', $todo) }}" wire:navigate>Edit</a>
                @endcan

                @can(\App\Enums\PermissionEnum::DELETE_TODOS->value)
                    <a href="{{ route('todos.delete', $todo) }}" wire:navigate>Delete</a>
                @endcan
            </li>
        @endforeach
    </ul>
</div>