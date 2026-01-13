<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CodElevator - Leading IT Company')</title>
    <meta name="google-site-verification" content="eEm_jo1DU-jl5GIWEa3wANkWLe-lNPZmm-B_Z1ALcDg" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'deep-blue': '#0f172a',
                        'bright-indigo': '#6366f1',
                        'bright-cyan': '#22d3ee'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-deep-blue text-white min-h-screen">
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>

