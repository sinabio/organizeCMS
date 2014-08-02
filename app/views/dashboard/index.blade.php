@extends('layouts.master')
@section('title')
organizeCMS - Dashboard
@stop

@section('content')

@if (isset($dashboard_widgets) && sizeof($dashboard_widgets) > 0)
<div class="row">
@foreach ($dashboard_widgets as $widget => $wdata)
    <div class="col-xs-2	col-sm-2 col-md-2 col-lg-2">
        <h3>{{ $wdata['title'] }}</h3>
        @if (is_array($wdata['content']))
            @foreach ($wdata['content'] as $k => $v)
                {{ $k }} {{ $v }}
            @endforeach
        @else
            {{ $wdata['content'] }}
        @endif
    </div>
@endforeach
</div>
@endif

@stop



@section('sidebar')

<div class="panel panel-default">
    <div class="panel-heading">Modules</div>

    @foreach ($enabled_modules as $module)
        <div class="panel-body">
            {{ $module }}
        </div>
    @endforeach

</div>

@stop