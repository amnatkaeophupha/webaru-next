<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('description', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')">

    <title>
        @yield('title', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')
    </title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Laravel Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="min-h-screen bg-white text-slate-800 antialiased">

    @include('components.site.header')

    <main>
        @yield('content')
    </main>

    @include('components.site.footer')

    @stack('scripts')
</body>

</html>
