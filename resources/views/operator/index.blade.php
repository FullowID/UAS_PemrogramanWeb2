@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Operator</h2>
            </div>
            @if (Auth::check())
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('operator.create') }}">Create New Class</a>
            </div>
            @endif
            
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered text-white">
        <tr>
            <th>Codename</th>
            <th>Class</th>
            <th>Faction</th>
            <th>Race</th>
            <th>Description</th>
            @if (Auth::check())
            <th>Action</th>
            @endif
        </tr>
        @foreach ($operator as $item)
        <tr>
            <td>{{ $item->codename}}</td>
            <td>{{ optional($item->operatorClass)->classname}}</td>
            <td>{{ $item->faction->factionname}}</td>
            <td>{{ $item->race->name}}</td>
            <td>{{ $item->description }}</td>
            @if (Auth::check())
            <td>
                 <a class="btn btn-info" href="{{ route('operator.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('operator.edit',$item->id) }}">Edit</a>
                <form action="{{ route('operator.destroy',$item->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </table>

@endsection