<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/webcam.min.js')}}"></script>
    <title>Plantegories</title>
</head>
<body class="bg-gray-300">
    <nav class="p-6 bg-white flex justify-between mb-6">

        <ul class="flex items-center">
            <li class="p-3">
                <a href="{{ route('home')}}">Home</a>
            </li>
            <li class="p-3">
                <a href="{{ route('dashboard')}}">Dashboard</a>
            </li>
            <li class="p-3">
                <a href="{{ route('list')}}">Inventory</a>
            </li>
            <li class="p-3">
                <a href="{{ route('capture')}}">Capture Image</a>
            </li>
            <li class="p-3">
                <a href="{{ route('calculator')}}">Soil Calculator</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li class="p-3">
                <a href="">Juan</a>
            </li>
            <li class="p-3">
                <a href="{{ route('login')}}">Login</a>
            </li>
            <li class="p-3">
                <a href="{{route('register')}}">Register</a>
            </li>
            <li class="p-3">
                <a href="{{ route('logout')}}">Logout</a>
            </li>
        </ul>

    </nav>
    @yield('content')
</body>
</html>