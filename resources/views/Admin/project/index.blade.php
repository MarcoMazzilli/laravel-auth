@extends('layouts.app')

@section('content')
<div class="container-fluid p-5">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">project_name</th>
                <th scope="col">thumb</th>
                <th scope="col">slug</th>
                <th scope="col">status</th>
                <th scope="col">license</th>
                <th scope="col">cta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@MarkMarkMarkMark</td>
                <td>@MarkMarkMark</td>
                <td>@MarkMarkMarkMark</td>
                <td>@mdMarkMarkMarko</td>
                <td>
                    <a href="#" class="btn btn-success">View</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>
    @endsection
