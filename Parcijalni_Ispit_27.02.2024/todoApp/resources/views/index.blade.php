@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Tasks</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->status }}</td>
                        <td>
                            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('tasks.create') }}" class="btn btn-success">Add New Task</a>
    </div>
@endsection
