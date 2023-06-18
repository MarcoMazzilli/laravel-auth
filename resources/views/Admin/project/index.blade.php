@extends('layouts.app')

@section('content')
<div class="container-fluid p-5 overflow-auto">

    <div class="d-flex justify-content-end px-5">
        <div>
            {{ $projects->links() }}
        </div>
        <div>
            <a class="btn btn-primary mx-3" href="{{ route('admin.project.create')}}"><i class="fa-solid fa-plus"></i></a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">project_name</th>
                <th scope="col">Url</th>
                <th scope="col">status</th>
                <th scope="col">license</th>
                <th scope="col">cta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project )

            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->project_name }}</td>
                <td>{{ $project->url }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->license }}</td>
                <td>
                    <a href="{{ route('admin.project.show', $project) }}" class="btn btn-success">View</a>
                    <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-warning text-white">Edit</a>
                    {{-- form --}}
                    <a href="#" class="btn btn-danger">Delete</a>
                    {{-- form --}}
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end px-5">
        <div>
            {{ $projects->links() }}
        </div>
    </div>

</div>
    @endsection
