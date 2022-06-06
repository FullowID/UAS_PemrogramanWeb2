@extends('layouts.app')

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome, {{ Auth::user()->name }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ url('/') }}">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="d-flex" style="height: 200px;"></div>
@endsection