<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <<link rel="icon" type="image/png" href="{{ asset('images/logo-universal.png') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>AlasBase</title>
</head>

<body class="flex flex-col h-full font-mono">
    <x-navbar></x-navbar>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer></x-footer>
</body>

</html>

