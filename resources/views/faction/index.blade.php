@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Faction</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('faction.create') }}"> Create New Faction</a>
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
            <th>Faction Name</th>
            <th>Type</th>
            <th>Dominant Race</th>
            <th>Action</th>
        </tr>
        @foreach ($faction as $item)
        <tr>
            <td>{{ $item->factionname}}</td>
            <td>{{ $item->type}}</td>
            <td>{{ $item->race}}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('faction.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('faction.edit',$item->id) }}">Edit</a>
                <form action="{{ route('faction.destroy',$item->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection