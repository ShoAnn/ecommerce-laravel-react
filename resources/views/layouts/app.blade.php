<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- tailwind --}}
    @vite('resources/css/app.css')
</head>

<body>
    @include('partial.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
