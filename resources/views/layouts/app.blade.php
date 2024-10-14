<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Tailwind CSS -->
</head>
<body class="bg-white text-gray-800 dark:bg-gray-900 dark:text-white">
    <div id="app">
        <!-- Navbar -->
        @include('components.navbar')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('components.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
