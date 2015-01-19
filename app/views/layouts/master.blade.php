<!DOCTYPE html>
<html>
<head>
    @include('layouts/_meta')
    @include('layouts/_style')
    @include('layouts/_js')
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
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
