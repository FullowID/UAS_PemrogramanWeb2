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
      <div class="col-3 mx-auto">
            <div class="col-3 mx-auto">
                <div class="p-2 text-white rounded bg-dark">Faction</div>
                <div class="p-2 text-white rounded bg-dark">
                    <p class="fs-3">{{ $operator->faction->factionname }}</p>
                </div>
            </div>
            </div>
            <div class="col-3 mx-auto">
            <div class="col-3 mx-auto">
                <div class="p-2 text-white rounded bg-dark">Race</div>
                <div class="p-2 text-white rounded bg-dark">
                    <p class="fs-3">{{ $operator->race->name }}</p>
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
@endsection