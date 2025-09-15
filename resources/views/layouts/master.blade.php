<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    {{-- Font (ok qui, NON dentro SCSS) --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700&display=swap" rel="stylesheet"/>

    {{-- SOLO Vite: niente asset() e niente <link ... app.scss> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <main class="container py-4">
        @yield('content')
    </main>
</body>
</html>
