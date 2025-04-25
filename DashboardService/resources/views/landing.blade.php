<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasih Kopi</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f9;
        }
        .bg-image {
            position: relative;
            background-image: url('https://cdn.pixabay.com/photo/2022/04/11/16/29/coffee-beans-7126154_1280.jpg');
            background-size: cover;
            background-position: center;
            margin-top: -5%;
            height: 400px; /* Atur tinggi sesuai kebutuhan */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam 50% */
        }
        .content {
            z-index: 1; /* Menempatkan konten di atas overlay */
        }
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background-color: transparent;
        }
        .navbar-brand img {
            height: 40px;
        }
        .footer {
            background-color: #f8f9fa;
            color: #495057;
            padding: 40px 0;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
        }
        .footer .column {
            flex: 1;
            padding: 0 20px;
            max-width: 33%;
        }
        .footer .column h5 {
            font-weight: bold;
            margin-bottom: 15px;
        }
        .footer .column p {
            font-size: 14px;
            line-height: 1.8;
        }
        .footer .social-icons a {
            margin-right: 10px;
            font-size: 20px;
            color: #495057;
        }
        .footer .social-icons a:hover {
            color: #007bff;
        }
        .footer .terms {
            font-size: 12px;
        }
        .main-image {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            Kasih Kopi
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Our Menu</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Landing Page Section with Background Image and Overlay -->
<div class="bg-image">
    <div class="bg-overlay"></div> <!-- Overlay hitam 50% -->
    <div class="content text-center">
        <h1 class="display-4 text-primary">Selamat Datang di Kasih Kopi!</h1>
        <p class="lead">Tempat terbaik untuk menikmati kopi segar dengan suasana yang nyaman. Rasakan kelezatan kopi pilihan dengan sentuhan kasih.</p>
        
        <!-- Button to Menu -->
        <a href="http://localhost:8001/menu" class="btn btn-primary btn-lg">Lihat Menu</a>
    </div>
</div>

<!-- Testimoni Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Apa Kata Pengunjung Kami?</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">"Kopi di Kasih Kopi selalu segar dan nikmat! Suasana yang nyaman membuat saya betah berlama-lama."</p>
                    <footer class="blockquote-footer">Andi, Pengunjung Setia</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">"Tempat yang cozy dan kopinya mantap. Pasti kembali lagi untuk menikmati suasana yang asik."</p>
                    <footer class="blockquote-footer">Rina, Pecinta Kopi</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">"Kasih Kopi tidak hanya menawarkan kopi enak, tapi juga pelayanan yang luar biasa!"</p>
                    <footer class="blockquote-footer">Joko, Pelanggan Puas</footer>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<div class="footer">
    <!-- Customer Center -->
    <div class="column">
        <h5>Customer Center</h5>
        <p><strong>Kasih Kopi</strong><br>Jl. Kopi No. 123, Jakarta Pusat, DKI Jakarta</p>
        <p><strong>Contact:</strong> 0812-1111-8456</p>
    </div>

    <!-- Consumer Complaints -->
    <div class="column">
        <h5>Consumer Complaints Service Contact Information</h5>
        <p>Directorate General of Consumer Protection and Trade Compliance,<br>Ministry of Trade of the Republic of Indonesia</p>
        <p><strong>WhatsApp Ditjen PKTN:</strong> 0853-1111-1010</p>
    </div>

    <!-- Social Media Links -->
    <div class="column">
        <p class="terms">&copy; 2025 Kasih Kopi. All rights reserved. • <a href="#">Terms and Conditions</a> • <a href="#">Privacy Policy</a></p>
    </div>
</div>

<!-- Bootstrap JS and Popper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
