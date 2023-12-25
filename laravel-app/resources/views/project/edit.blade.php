@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Edit Project</h1>

        <form action="{{ route('update', $project) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Project Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
            </div>

            <div class="form-group">
                <label for="description">Project Description</label>
                <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
    </div>
@endsection
