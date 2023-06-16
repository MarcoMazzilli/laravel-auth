@extends('layouts.app')

@section('content')
    <div class="container-fluid p-5 overflow-auto">
        <h1>Create new project</h1>

        <form action="{{ route('admin.project.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="project_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Insert project's name">
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Insert project's url">
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="5" placeholder="Insert project's description"></textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="d-block" name="status" id="status">

                    <option selected value="end">End</option>
                    <option value="in-progress">In progress</option>

                </select>
            </div>

            <div class="mb-3">
                <label for="license" class="form-label">License</label>
                <select class="d-block" name="license" id="license">

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
