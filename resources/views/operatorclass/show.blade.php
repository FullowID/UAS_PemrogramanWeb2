@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Operator Class</h2>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('operator_class.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="col-3 mx-auto">
            <div class="col-3 mx-auto">
                <div class="p-2 text-white rounded bg-dark">Faction</div>
                <div class="p-2 text-white rounded bg-dark">
                    <p class="fs-3">{{ $operator->factions->factionname }}</p>
                </div>
            </div>
            </div>
            <div class="col-3 mx-auto">
            <div class="col-3 mx-auto">
                <div class="p-2 text-white rounded bg-dark">Race</div>
                <div class="p-2 text-white rounded bg-dark">
                    <p class="fs-3">{{ $operator->races->name }}</p>
                </div>
            </div>
            </div>
            <div class="col-6 mx-auto">
            <div class="col-6 mx-auto">
                <p class="p-2 text-white rounded bg-dark">Description</p>
                <p class="p-2 text-white rounded bg-dark">
                    <p class="fs-3">{{ $operator->description }}</p>
                </p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Classname:</strong>
                {{ $operator_class->classname }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position:</strong>
                {{ $operator_class->position}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $operator_class->description}}
            </div>
        </div>
    </div>
@endsection