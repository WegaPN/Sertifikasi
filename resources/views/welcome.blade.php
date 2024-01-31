<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Layanan Sertifikasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .jumbotron {
            background-color: #007bff;
            color: #fff;
            padding: 80px 20px;
            margin-bottom: 30px;
        }
        .cta-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .cta-btn:hover {
            background-color: #218838;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Selamat Datang di Layanan Sertifikasi</h1>
            <p>Menjadi Profesional Bersertifikasi</p>
            <a href="#services" class="cta-btn">Lihat Layanan Kami</a>
        </div>
        
        <div id="services">
            <h2 class="text-center">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Skema Sertifikasi</h3>
                    <p>Jelajahi berbagai skema sertifikasi yang kami tawarkan untuk meningkatkan kredibilitas dan profesionalisme Anda.</p>
                    <a href="{{ route('skema.index') }}" class="btn btn-primary">Lihat Skema</a>
                </div>
                <div class="col-md-4">
                    <h3>Data Peserta</h3>
                    <p>Lihat dan kelola data peserta sertifikasi yang terdaftar pada layanan kami.</p>
                    <a href="{{ route('peserta.index') }}" class="btn btn-primary">Lihat Peserta</a>
                </div>
                <div class="col-md-4">
                    <h3>Formulir Pendaftaran</h3>
                    <p>Daftarkan diri Anda untuk mendapatkan sertifikasi dan meningkatkan kualitas profesionalisme Anda.</p>
                    <a href="{{ route('form.create') }}" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
