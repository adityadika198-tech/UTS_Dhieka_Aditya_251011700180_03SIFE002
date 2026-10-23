<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'KaryaNusa - Marketplace Kerajinan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">KaryaNusa</a>
        <span class="navbar-text text-white">Marketplace Kerajinan Lokal</span>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    Marketplace Kerajinan KaryaNusa
</footer>

</body>
</html>
