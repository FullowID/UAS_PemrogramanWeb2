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
                        <label for="codename" class="form-label">Codename:</label>
                        <input type="text" name="codename" id="codename" value="{{ $operator->codename }}" class="form-control" placeholder="Codename">
                    </div>


                    <div class="hstack gap-3 my-3">
                        <select class="form-control" id="operator_classes_id" name="operator_classes_id" required="required">
                            <option value="" selected disabled>Pick a Class</option>
                            @foreach($operator_class as $item)
                            <option value="{{ $item->id }}">{{$item->classname}}</option>
                            @endforeach
                        </select>

                        <select class="form-control" id="factions_id" name="factions_id" required="required">
                            <option value="" selected disabled>Pick a Faction</option>
                            @foreach($faction as $item)
                            <option value="{{ $item->id }}">{{$item->factionname}}</option>
                            @endforeach
                        </select>

                        <select class="form-control" id="races_id" name="races_id" required="required">
                            
                            <option value="" selected disabled>Pick a Race</option>
                            @foreach($race as $item)
                            <option value="{{ $item->id }}">{{$item->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="mb-3 col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" style="height:150px" name="description" id="description" placeholder="Operator Description">{{ $operator->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="d-flex" style="height: 100px;"></div>

@endsection