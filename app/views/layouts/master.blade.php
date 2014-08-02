<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/bootstrap_slate.min.css" />
    <link rel="stylesheet" href="assets/css/organizecms.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="navbar navbar-default navbar-fixed-top">
        <header class="nav" role="navigation" id="navbar-main">
            <a class="navbar-brand">organizeCMS</a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">admin</a></li>
                </ul>
            </div>
        </header>
    </div>
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