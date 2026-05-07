<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Título dinámico --}}
    <title>@yield('title', 'Tu Nombre | Backend Engineer')</title>
    <meta name="description" content="@yield('meta_description', 'Backend engineer specializing in distributed systems and scalable architecture.')">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Fuentes (Similar a las usadas en el sitio original) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Tailwind CSS CDN (para desarrollo rápido) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Nunito', 'sans-serif'],
                        'mono': ['JetBrains Mono', 'monospace'],
                    },
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-white text-gray-900">
<main class="min-h-screen">
    <div class="max-w-3xl mx-auto px-4 py-12">
        @yield('content')
    </div>
</main>
</body>
</html>
