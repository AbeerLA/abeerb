<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Abeer — Full-Stack Developer Portfolio')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    {{-- Tailwind via CDN (same as Stitch). See notes for moving to Vite later. --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @include('partials.tailwind-config')

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    @stack('styles')
</head>

<body
    class="bg-brand-main text-brand-parchment antialiased relative min-h-screen selection:bg-brand-sage selection:text-brand-main overflow-x-hidden">

    {{-- Ambient Lighting Effects --}}
    <div class="fixed inset-0 pointer-events-none ambient-glow-top z-0"></div>
    <div class="fixed inset-0 pointer-events-none ambient-glow-bottom z-0"></div>

    @include('partials.navbar')

    <main class="relative z-10 pt-28 space-y-28 md:space-y-36">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>

</html>