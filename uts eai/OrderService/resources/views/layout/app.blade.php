<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pemesanan Kopi')</title>
</head>
<body>
    <header>
        <h1>Welcome to Kopi Kasih</h1>
        <nav>
            <a href="{{ route('orders.create') }}">Pesan Kopi</a> |
            <a href="{{ route('orders.index') }}">Daftar Pesanan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Coffee Shop</p>
    </footer>
</body>
</html>
