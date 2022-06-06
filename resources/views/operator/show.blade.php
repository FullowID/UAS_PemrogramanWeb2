@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 m-3">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('operator.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="text-secondary px-5 text-center">
    <div class="py-1">
        <h2 class="display-5 fw-bold text-white">{{ $operator->codename }}</h2>

        <div class="shadow bg-body rounded">
            <p class="fs-3">{{ $operator->operatorClass->classname }}</p>
        </div>
        <div class="row mx-auto container overflow-hidden">

        
            <div class="col-3 mx-auto">
                <div class="p-2 text-white rounded bg-dark">Faction</div>
            </div>
            <div class="col-3 mx-auto">
                <div class="p-2 text-white rounded bg-dark">Race</div>
            </div>
            <div class="col-6 mx-auto">
                <p class="p-2 text-white rounded bg-dark">Description</p>
            </div>
        </div>
    </div>
</div>
@endsection