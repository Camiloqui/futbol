<html>
<head>
    <title>Cuadrangular de futbol - @yield('title')</title>
    <script src="{{asset('js/app.js')}}" defer></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>

@show

<div class="container">
    @yield('content')
</div>

</body>
</html>
