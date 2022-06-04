@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Operator Class</h2>
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

    <table class="table table-bordered text-white">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($operator_class as $item)
        <tr>
            <td>{{ $item->classname}}</td>
            <td>{{ $item->position }}</td>
            <td>{{ $item->description }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('operator_class.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('operator_class.edit',$item->id) }}">Edit</a>
                <form action="{{ route('operator_class.destroy',$item->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection