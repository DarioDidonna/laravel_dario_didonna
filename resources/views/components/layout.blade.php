<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOUND_OUTLINE.com</title>
    <link rel="icon" type="image/png" href="{{ asset('media/favicon.png') }}?v={{ time() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-navbar />

    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-footer />

</body>

</html>