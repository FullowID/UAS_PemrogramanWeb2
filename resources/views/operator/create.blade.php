@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Operator</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('operator.index') }}"> Back</a>
        </div>
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

<form action="{{ route('operator.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codename:</strong>
                <input type="text" name="codename" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" id="operator_classes_id" name="operator_classes_id" required="required">
                <option value="" selected disabled>Pick a class</option>
                @foreach($operator_class as $item)
                <option value="{{ $item->id }}">{{$item->classname}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" id="factions_id" name="factions_id" required="required">
                <option value="" selected disabled>Pick a Faction</option>
                @foreach($faction as $item)
                <option value="{{ $item->id }}">{{$item->factionname}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <select class="form-control" id="races_id" name="races_id" required="required">
                <option value="" selected disabled>Pick a Race</option>
                @foreach($race as $item)
                <option value="{{ $item->id }}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection