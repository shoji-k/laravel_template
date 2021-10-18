<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Sample App' }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .is-invalid {
            border: 1px solid red;
        }

        .alert-danger {
            color: red;
        }
    </style>

    @stack('scripts')
</head>

<body class="container mx-auto pt-2">
    {{ $slot }}
</body>

</html>