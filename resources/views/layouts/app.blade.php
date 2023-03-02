<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout Site</title>
</head>
<body>
    <x-navbar />
    {{--@section('header')--}}
    {{--<h1> TESTANDO O PARENT</h1>--}}
    {{--@show--}}

    <main style="padding: 20px; height: 79vh">
        @yield('content')
    </main>

    {{--@section('footer')--}}
    {{--@show--}}
    <x-footer />

</body>
</html>
