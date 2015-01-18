@extends('layouts/master')

@section('title')
organizeCMS : Create Vehicle
@stop

@section('content')

<h1>Vehicles</h1>
<div class="well bs-component col-lg-10">
    {{ Form::open(array('url' => 'vehicles', 'class' => 'form-horizontal')) }}

    <h2>Create</h2>

    <div class="form-group">
        <label for="make" class="control-label col-lg-2">Make</label>
        <select name="make" id="make" class="form-control">
            @foreach($makes as $make)
            <option value="{{$make['id']}}">{{ $make['make'] }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="model" class="control-label col-lg-2">Model</label>
        <input type="text" name="model" id="model" class="form-control col-lg-6"/>
    </div>

    <div class="form-group">
        <label for="price" class="control-label col-lg-2">Purchase Price</label>
        <input type="text" name="price" id="price" class="form-control col-lg-4"/>
    </div>

    <div class="form-group">
        <label for="price" class="control-label col-lg-2">Registration</label>
        <input type="text" name="registration" id="registration" class="form-control col-lg-4"/>
    </div>

    <div class="form-group">
        <label for="enginesize" class="control-label col-lg-2">Engine Size</label>
        <input type="text" name="enginesize" id="enginesize" class="form-control col-lg-4"/>
    </div>

    <div class="form-group">
        <label for="datebought" class="control-label col-lg-2">Date Bought</label>
        <input type="date" name="datebought" id="datebought" class="form-control col-lg-4"/>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Create!" />
    </div>

    {{ Form::close() }}
</div>

@stop

@section('sidebar')
<div class="panel panel-default">
    <div class="panel-heading">Vehicles</div>
    <div class="panel-body">
        Create
    </div>
    <div class="panel-body">
        {{ link_to('vehicles', 'List'); }}
    </div>
</div>
@stop
