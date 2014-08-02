@extends('layouts.master')

@section('content')
    <h1>organizeCMS :: Installation</h1>
    <div class="well bs-component col-lg-8">
        <form class="form-horizontal" role="form">

            <h2>Database</h2>

            <div class="form-group">
                <label for="host" class="control-label col-lg-2">host</label>
                <input type="text" name="host" id="host" class="form-control" />
            </div>

            <div class="form-group">
                <label for="database" class="control-label col-lg-2">database</label>
                <input type="text" name="database" id="database" class="form-control col-lg-6" />
            </div>

            <div class="form-group">
                <label for="dbuser" class="control-label col-lg-2">database username</label>
                <input type="text" name="dbuser" id="dbuser" class="form-control col-lg-4" />
            </div>

            <div class="form-group">
                <label for="dbpass" class="control-label col-lg-2">database password</label>
                <input type="password" name="dbpass" id="dbpass" class="form-control col-lg-4" />
            </div>

        </form>
    </div>
@stop

@section('sidebar')
<div class="bs-component">
    <div class="progress-bar">
        <div class="progress-bar progress-bar-success" style="width: 35%;"></div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">Installation</div>
    <div class="panel-body">
        Database
    </div>
    <div class="panel-body">
        Admin User
    </div>
</div>
@stop