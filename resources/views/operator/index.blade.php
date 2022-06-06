@extends('layouts.app')
@section('content')

<div class="container m-4">
    <div class="row justify-content-start">
        <div class="col">
            <a class="btn btn-primary" href="{{ url('/') }}">Back</a>
        </div>
        <div class="col">
            <h2 class="text-white">Operator</h2>
        </div>
    </div>
</div>
<div class="container mb-3">
    <div class="row justify-content-end">
        <div class="col-2">
            <a class="btn rounded-pill shadow btn-success" href="{{ route('operator.create') }}">Create New Operator</a>
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
        <th>Codename</th>
        <th>Class</th>
        <th>Faction</th>
        <th>Race</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach ($operator as $item)
    <tr>
        <td>{{ $item->codename}}</td>
        <td>{{ optional($item->operatorClass)->classname}}</td>
        <td>{{ $item->faction->factionname}}</td>
        <td>{{ $item->race->name}}</td>
        <td>{{ $item->description }}</td>
        <td>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                    <a class="btn mx-2 px-2 col btn-info" href="{{ route('operator.show',$item->id) }}">Show</a>
                    <a class="btn mx-2 px-2 col btn-primary" href="{{ route('operator.edit',$item->id) }}">Edit</a>
                    <form action="{{ route('operator.destroy',$item->id) }}" method="POST">

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