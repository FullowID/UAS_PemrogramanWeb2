@extends('layouts.app')
@section('content')

<div class="container m-4">
    <div class="row justify-content-start">
        <div class="col-2">
            <a class="btn btn-primary" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg> Back
            </a>
        </div>
        <div class="col text-center">
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

<table class="table text-center table-striped table-dark table-hover text-white">
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
                <div class="col">

                    <a class="btn my-2 btn-info" href="{{ route('operator.show',$item->id) }}">Show</a>
                    <a class="btn my-2 btn-primary" href="{{ route('operator.edit',$item->id) }}">Edit</a>
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

<div class="d-flex" style="height: 100px;"></div>

@endsection