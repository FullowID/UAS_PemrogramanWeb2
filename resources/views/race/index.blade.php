@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Operator Class</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('race.create') }}"> Create New Race</a>
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
            <th>Race Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($race as $item)
        <tr>
            <td>{{ $item->name}}</td>
            <td>{{ $item->description }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('race.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('race.edit',$item->id) }}">Edit</a>
                <form action="{{ route('race.destroy',$item->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection