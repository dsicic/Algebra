@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Task</h2>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Task Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
@endsection
