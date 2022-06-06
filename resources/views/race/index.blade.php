@extends('layouts.app')
@section('content')

<div class="container m-4">
    <div class="row justify-content-start">
        <div class="col">
            <a class="btn btn-primary" href="{{ url('/') }}">Back</a>
        </div>
        <div class="col">
            <h2 class="text-white">Race</h2>
        </div>
    </div>
</div>
<div class="container mb-3">
    <div class="row justify-content-end">
        <div class="col-2">
            <a class="btn rounded-pill shadow btn-success" href="{{ route('race.create') }}">Create New Race</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-striped table-dark table-hover text-white">
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
            <div class="container">
                <div class="col">

                    <a class="btn my-2 btn-info" href="{{ route('race.show',$item->id) }}">Show</a>
                    <a class="btn my-2 btn-primary" href="{{ route('race.edit',$item->id) }}">Edit</a>
                    <form action="{{ route('race.destroy',$item->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</table>

@endsection