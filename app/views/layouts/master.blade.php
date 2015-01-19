<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=asset('assets/css/bootstrap_slate.min.css');?>" />
    <link rel="stylesheet" href="<?=asset('assets/css/organizecms.css');?>" />
    <link rel="icon" type="image/png" href="<?=asset('favicon64.png');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="<?=asset('assets/js/bootstrap.min.js');?>"></script>
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    @include('layouts/_nav')
</div>

<div class="container" id="content">

    <div class="col-xs-	8 col-sm-8 col-md-8 col-lg-10">
        @yield('content')
    </div>

    <div class="col-xs-	4 col-sm-4 col-md-4 col-lg-2">
        @yield('sidebar')
    </div>
</div>
</body>
</html>
