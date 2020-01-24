<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kevin Kranenburg - www.kevinkranenburg.nl">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Kevin's laravel dinges</title>
</head>

<body>
@include('inc.navbar')
    <div class="container">
        @if (Request::is('/'))
        @include('inc.showcase')
        @endif
        <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
        </div>
    </div>
</div>

<footer class="text-center" id="footer">
    <p>Copyright 2020 &copy; www.kevinkranenburg.nl</p>
</footer>

</body>
</html>