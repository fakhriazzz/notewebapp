<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'NoteApp' }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @stack('css')
</head>

<body>
    @include('layouts.navbar')
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    @stack('js')
</body>

</html>
