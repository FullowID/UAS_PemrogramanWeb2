@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 m-3">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('operator_class.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="text-secondary px-5 text-center">
    <div class="py-1">
        <h2 class="display-5 mb-5 fw-bold text-white">{{ $operator_class->classname }}</h2>

        <div class="row mx-auto container overflow-hidden">

            <div class="col-5 mx-auto">
                <p class="p-2 shadow text-white rounded bg-dark">Position</p>
                <div class="card shadow text-bg-light mb-3" style="max-width: 28rem;">
                    <div class="card-body">
                        <p>{{$operator_class->position}}</p>
                    </div>
                </div>
            </div>

            <div class="col-5 mx-auto">
                <p class="p-2 shadow text-white rounded bg-dark">Description</p>
                <div class="card shadow text-bg-light" style="max-width: 28rem;">
                    <div class="card-body">
                        <p>{{$operator_class->description}}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection