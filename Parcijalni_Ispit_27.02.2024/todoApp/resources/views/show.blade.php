@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Task Details</h2>
        <p><strong>Name:</strong> {{ $task->name }}</p>
        <p><strong>Status:</strong> {{ $task->status }}</p>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit Task</a>
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Task</button>
        </form>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
    </div>
@endsection
