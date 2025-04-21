<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Coffee Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        .content {
            text-align: center;
            padding: 50px 20px;
        }
        .content h2 {
            font-size: 2rem;
            color: #333;
        }
        .content p {
            font-size: 1.2rem;
            color: #555;
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            border: none;
            font-size: 1rem;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to Coffee Shop</h1>
    </header>

    <div class="content">
        <h2>Delicious Coffee at Your Fingertips</h2>
        <p>Welcome to our Coffee Shop! Choose from a variety of freshly brewed coffees and enjoy the best experience.</p>
        <a href="{{ route('orders.create') }}" class="btn">Order Now</a>
    </div>

</body>
</html>
