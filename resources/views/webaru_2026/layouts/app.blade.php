<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')">

    <title>@yield('title', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;500;600;700&family=Noto+Sans+Thai:wght@300;400;500;600;700;800&family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/webaru_2026.css', 'resources/js/webaru_2026.js'])
    @stack('styles')
</head>

<body class="min-h-screen bg-[#F7F8FA] font-sans text-aru-text antialiased selection:bg-aru-primary selection:text-white">
    @include('webaru_2026.partials.header')

    <main class="overflow-hidden">
        @yield('content')
    </main>

    @include('webaru_2026.partials.footer')
    @stack('scripts')
</body>
</html>
