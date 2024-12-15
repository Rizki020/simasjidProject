<?php
session_start();

// Pastikan user sudah login dan bukan admin
if (!isset($_SESSION['role']) || $_SESSION['role'] === 'admin') {
    header('Location: login.php'); // Arahkan kembali ke halaman login jika tidak sesuai
    exit;
}

// Variabel untuk menyimpan data user
$username = $_SESSION['username'];
$role = ucfirst(str_replace('_', ' ', $_SESSION['role'])); // Format role untuk tampilan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="header">
            <h1>Dashboard User</h1>
            <h3>Selamat datang, <?= htmlspecialchars($username); ?> (<?= htmlspecialchars($role); ?>)</h3>
        </div>
        
        <!-- Konten berdasarkan role -->
        <div class="content">
            <?php if ($_SESSION['role'] === 'jamaah'): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menu Jamaah</h5>
                        <p class="card-text">Lihat jadwal pengajian, informasi kegiatan masjid, dan layanan jamaah lainnya.</p>
                        <a href="#" class="btn btn-primary">Lihat Jadwal</a>
                    </div>
                </div>
            <?php elseif ($_SESSION['role'] === 'ketua_bkm'): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menu Ketua BKM</h5>
                        <p class="card-text">Kelola laporan keuangan, administrasi masjid, dan kegiatan internal BKM.</p>
                        <a href="#" class="btn btn-primary">Kelola Laporan</a>
                    </div>
                </div>
            <?php elseif ($_SESSION['role'] === 'petirwitan'): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menu Petirwitan</h5>
                        <p class="card-text">Kelola jadwal adzan, imam sholat, dan pelatihan petirwitan.</p>
                        <a href="#" class="btn btn-primary">Lihat Jadwal</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    Role tidak dikenal! Hubungi administrator.
                </div>
            <?php endif; ?>
        </div>

        <!-- Tombol Logout -->
        <div class="mt-4">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <script src="boostrap/js/bootstrap.min.js"></script>
</body>
</html>
