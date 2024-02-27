@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Task Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
@endsection
