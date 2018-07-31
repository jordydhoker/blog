<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
</head>
<body>
@include('partials.header')

<div class="container">
    @yield('content')
</div>
</body>
</html>
