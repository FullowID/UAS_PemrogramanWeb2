@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Faction</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faction.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faction Name:</strong>
                {{ $faction->factionname }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faction Type:</strong>
                {{ $faction->type }}
            </div>
        </div>

    </div>
@endsection