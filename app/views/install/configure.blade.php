@extends('layouts.master')

@section('content')
    <h1>organizeCMS :: Installation</h1>
    <div class="well bs-component col-lg-8">
        <form class="form-horizontal">

            <h2>Database</h2>

            <div class="form-group">
                <label for="host" class="control-label col-lg-2">host</label>
                <input type="text" name="host" id="host" class="form-control col-lg-6" />
            </div>

            <div class="form-group">
                <label for="database" class="control-label col-lg-2">database</label>
                <input type="text" name="database" id="database" class="form-control col-lg-6" />
            </div>

            <div class="form-group">
                <label for="db username" class="control-label col-lg-2">database username</label>
                <input type="text" name="dbuser" id="dbuser" class="form-control col-lg-4" />
            </div>


        </form>
    </div>
@stop

@section('sidebar')
    <p>Sidebar</p>
@stop