@extends('layouts.app')

@section('content')
    <div class="container-fluid p-5 overflow-auto">
        <h1 class="mb-3">Create new project</h1>

        @if ($errors->any())
            <ul class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)

                    <li class="nav-item list-unstyled">{{ $error }} </li>

                @endforeach
            </ul>
        @endif

        <form action="{{ route('admin.project.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="project_name" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control @error('project_name') is-invalid @enderror"
                    id="project_name"
                    name="project_name"
                    placeholder="Insert project's name"
                    value="{{old('project_name')}}">
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input
                    type="text"
                    class="form-control @error('url') is-invalid @enderror"
                    id="url"
                    name="url"
                    placeholder="Insert project's url"
                    value="{{old('url')}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Path image</label>
                <input
                    type="text"
                    class="form-control"
                    id="thumb"
                    name="thumb"
                    placeholder="Insert project's thumb"
                    value="{{old('thumb')}}">
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Description</label>
                <textarea
                    name="description"
                    id="description"
                    class="form-control @error('description') is-invalid @enderror"
                    cols="30"
                    rows="5"
                    placeholder="Insert project's description">{{old('description')}}</textarea>
            </div>

            @if ($errors->any())
                <div class="alert alert-warning">
                    <p>Ricompila "Stato" e "Licenza"</p>
                </div>
            @endif

            <div class="mb-3 w-25">
                <label for="status" class="form-label">Status</label>
                <select class="form-select"  name="status" id="status">

                    <option selected value="end">End</option>
                    <option value="in-progress">In progress</option>

                </select>
            </div>

            <div class="mb-3 w-25">
                <label for="license" class="form-label">License</label>
                <select class="form-select" name="license" id="license">

                    <option selected value="undefined">Undefined</option>
                    <option value="mit">M.I.T</option>
                    <option value="eula">EULA</option>
                    <option value="open">OPEN SOURCE</option>

                </select>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
