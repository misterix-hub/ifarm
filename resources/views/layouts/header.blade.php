<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('mdb/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('mdb/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('mdb/css/style.css') }}">
    @yield('css')
    <title>Ifarm</title>
</head>
<body>
    @yield('leftSideBar')
    @yield('fermeContent')

    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('mdb/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('mdb/js/mdb.min.js') }}"></script>
    <script src="{{ URL::asset('mdb/js/bootstrap.min.js') }}"></script>
    @yield('js')
</body>
</html>