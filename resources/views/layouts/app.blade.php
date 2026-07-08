<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $portfolio['name'] }} — {{ $portfolio['title'] }}. {{ $portfolio['tagline'] }}">
    <meta name="author" content="{{ $portfolio['name'] }}">

    <meta property="og:title" content="{{ $portfolio['name'] }} — {{ $portfolio['title'] }}">
    <meta property="og:description" content="{{ $portfolio['tagline'] }}">
    <meta property="og:type" content="website">

    <title>{{ $portfolio['name'] }} — {{ $portfolio['title'] }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased selection:bg-brand-500/30 selection:text-white">
    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
