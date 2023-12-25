@extends('layout.master')
@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Projects</h1>
            <a href="{{ route('create') }}" class="btn btn-primary">Add Project</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th> <!-- Yeni eklenen sütun -->
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a href="{{ route('edit', $project) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('destroy', $project) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection