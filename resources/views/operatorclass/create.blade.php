@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 m-3">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('operator_class.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg> Back
            </a>
        </div>
    </div>
</div>

<div class="text-secondary px-5 text-center">
    <div class="py-1">
        <h2 class="display-5 fw-bold text-white">Add New Class</h2>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('operator_class.store') }}" method="POST">
    @csrf

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3 col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="classname" class="form-label">Classname:</label>
                            <input type="text" name="classname" id="classname" class="form-control" placeholder="Classname">
                        </div>
                    </div>

                    <div class="mb-3 col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="position" class="form-label">Position:</label>
                            <input type="text" name="position" id="position" class="form-control" placeholder="Position">
                        </div>
                    </div>

                    <div class="mb-3 col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Operator Description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="d-flex" style="height: 100px;"></div>
@endsection