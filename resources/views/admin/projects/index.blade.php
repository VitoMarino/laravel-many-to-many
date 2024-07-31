@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Activity</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->type->name}}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->activity }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->date }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary btn-sm">
                                        Show
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-success btn-sm">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
