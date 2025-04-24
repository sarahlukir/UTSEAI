<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <nav class="mb-4">
            <a href="/orders" class="btn btn-outline-primary">Daftar Pesanan</a>
            <a href="/orders/create" class="btn btn-primary">Buat Pesanan</a>
        </nav>
        @yield('content')
    </div>
</body>
</html>
