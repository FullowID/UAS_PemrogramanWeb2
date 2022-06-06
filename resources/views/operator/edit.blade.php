@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('operator.index') }}">Back</a>
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

<form action="{{ route('operator.update',$operator->id) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">    
                        <strong>Codename:</strong>
                        <input type="text" name="codename" value="{{ $operator->codename }}" class="form-control" placeholder="Codename">
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <select class="form-control" id="operator_classes_id" name="operator_classes_id" required="required">
                    <option value="" selected disabled>Pick a Class</option>
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
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Operator Description">{{ $operator->description }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection