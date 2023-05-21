<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="{{ asset('images/logo.png') }}" rel="icon" type="image/png">
    <title>Guesa - @yield('title')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js']);
</head>

<body class="sb-nav-fixed">

    @yield('content')




</body>

</html>
