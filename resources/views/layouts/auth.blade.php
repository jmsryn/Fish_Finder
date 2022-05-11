<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ request()->is('admin/login') ? 'Login | Fish Finder' : 'Register | Fish Finder' }}</title>
    @livewireStyles
</head>
<body>
    <main class="w-full h-full flex justify-center">
        {{ $slot }}
    </main>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>