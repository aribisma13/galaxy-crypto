<?php
require 'koneksi.php';

// Daftar harga kelas (sinkron dengan payment.php)
$kelasList = [
    "beginner" => ["nama" => "Kelas Beginner", "harga" => 150000],
    "middle" => ["nama" => "Kelas Middle", "harga" => 180000],
    "profesional" => ["nama" => "Kelas Profesional", "harga" => 400000],
    "premium" => ["nama" => "Kelas Premium", "harga" => 500000]
];

// Tangkap dan validasi data
$nama  = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$kelasDipilih = $_POST['kelas'] ?? '';

if ($nama === '' || $email === '' || $kelasDipilih === '') {
    echo "<h2>Data tidak lengkap! Silakan kembali dan isi semua data.</h2>";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h2>Email tidak valid!</h2>";
    exit;
}

if (!isset($kelasList[$kelasDipilih])) {
    echo "<h2>Kelas tidak ditemukan!</h2>";
    exit;
}

$kelasInfo = $kelasList[$kelasDipilih];
$harga = $kelasInfo['harga'];
$tanggal = date('Y-m-d H:i:s');

// Simpan data ke database
$stmt = $conn->prepare("INSERT INTO pembayaran (nama, email, kelas, harga, created_at) VALUES (?, ?, ?, ?, ?)");
if (!$stmt) {
    echo "<h2>Kesalahan server: gagal mempersiapkan statement.</h2>";
    exit;
}
$stmt->bind_param("sssds", $nama, $email, $kelasDipilih, $harga, $tanggal);

if (!$stmt->execute()) {
    echo "<h2>Gagal menyimpan ke database: " . htmlspecialchars($stmt->error) . "</h2>";
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pesanan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/galaxy-crypto.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body.bg-proses-pembayaran {
            background-image: url('assets/img/bg-login-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-proses-pembayaran">
    <div class="container mt-5">
        <div class="card mx-auto shadow" style="max-width: 600px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4 text-success">Pendaftaran Berhasil!</h3>
                <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                <p><strong>Kelas yang diambil:</strong> <?= htmlspecialchars($kelasInfo['nama']) ?></p>
                <p><strong>Harga:</strong> Rp <?= number_format($harga, 0, ',', '.') ?></p>
                <p><strong>Waktu Transaksi:</strong> <?= $tanggal ?></p>

                <hr>
                <p class="text-muted">📧 Info lebih lanjut dan akses kelas akan dikirim ke email Anda.</p>
                <a href="login.php" class="btn btn-primary">Login</a>
                <a href="index.php" class="btn btn-secondary">Kembali ke Home</a>
            </div>
        </div>
    </div>
</body>
</html>
