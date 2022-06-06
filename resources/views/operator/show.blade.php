@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 m-3">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('operator.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg> Back
            </a>
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
                <p class="p-2 shadow text-white rounded bg-dark">Faction</p>
                <div class="card shadow text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <p>{{$operator->faction->factionname}}</p>
                    </div>
                </div>
            </div>

            <div class="col-3 mx-auto">
                <p class="p-2 shadow text-white rounded bg-dark">Race</p>
                <div class="card shadow text-bg-light" style="max-width: 18rem;">
                    <div class="card-body">
                        <p>{{$operator->race->name}}</p>
                    </div>
                </div>
            </div>

            <div class="col-5 mx-auto">
                <p class="p-2 shadow text-white rounded bg-dark">Description</p>
                <div class="card shadow text-bg-light" style="max-width: 28rem;">
                    <div class="card-body">
                        <p>{{$operator->description}}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="d-flex" style="height: 100px;"></div>

@endsection