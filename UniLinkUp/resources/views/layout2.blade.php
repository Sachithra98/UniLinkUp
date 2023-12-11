<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... (existing head content) ... -->
</head>
<body>
    <div id="app">
        <nav>
            <!-- ... (existing navigation links) ... -->

            <a href="{{ url('/notifications') }}">Notifications</a>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
