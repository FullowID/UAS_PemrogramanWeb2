@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 m-3">
        <div class="pull-left">
            <h2> Show Operator</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('operator.index') }}">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Codename:</strong>
            {{ $operator->codename}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Class:</strong>
            {{ $operator->operatorClass->classname}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Factoion:</strong>
            {{ $operator->faction->factionname}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Race:</strong>
            {{ $operator->race->name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {{ $operator->description}}
        </div>
    </div>
</div>
@endsection