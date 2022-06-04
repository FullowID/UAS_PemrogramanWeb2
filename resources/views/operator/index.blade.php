@extends('layouts.app_bs')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('operator_class.create') }}"> Create New Class</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($operator_class as $opClass)
        <tr>
            <td>{{ $opClass->classname }}</td>
            <td>{{ $opClass->position }}</td>
            <td>{{ $opClass->description }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('operator_class.show',$opClass->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('operator_class.edit',$opClass->id) }}">Edit</a>
                <form action="{{ route('operator_class.destroy',$opClass->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection