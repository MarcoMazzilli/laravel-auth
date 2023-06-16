@extends('layouts.app')

@section('content')
<div class="container-fluid p-5 overflow-auto">

    <div class="d-flex justify-content-end px-5">
        <div>
            {{ $projects->links() }}
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">project_name</th>
                <th scope="col">thumb</th>
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
                <td>{{ $project->thumb }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->license }}</td>
                <td>
                    <a href="#" class="btn btn-success">View</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
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
