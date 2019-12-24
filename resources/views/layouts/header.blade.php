<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    @yield('css')
    <title>Ifarm</title>
</head>
<body>
    @yield('content')

    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    @yield('js')
</body>
</html>