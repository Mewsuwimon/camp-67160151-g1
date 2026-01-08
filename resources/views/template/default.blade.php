<!-- file : resources/views/html101.blade.php -->
<!Doctype html>
<html>
<head>
    <title>HTML - @yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

    <style>
        body{
            font-family: "Sarabun", sans-serif;
        }

    </style>
    @stack('styles')
</head>
<body>
        <div class="container mt-4">
        <h1>@yield('header')</h1>
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>
