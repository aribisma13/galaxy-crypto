<?php
// Daftar harga kelas
$kelasList = [
    "beginner" => ["nama" => "Kelas Beginner", "harga" => 150000],
    "middle" => ["nama" => "Kelas Middle", "harga" => 180000],
    "profesional" => ["nama" => "Kelas Profesional", "harga" => 400000],
    "premium" => ["nama" => "Kelas Premium", "harga" => 500000]
];

// Ambil parameter kelas dari URL
$kelasDipilih = $_GET['kelas'] ?? '';

// Validasi kelas
if (!isset($kelasList[$kelasDipilih])) {
    echo "<h2>Kelas tidak ditemukan!</h2>";
    exit;
}

$kelas = $kelasList[$kelasDipilih];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran - <?= htmlspecialchars($kelas['nama']) ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/galaxy-crypto.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body.bg-payment {
            background-image: url('assets/img/bg-login-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-payment">
    <div class="container mt-5">
        <div class="card mx-auto shadow-lg" style="max-width: 500px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Konfirmasi Pembayaran</h3>
                <p><strong>Kelas:</strong> <?= htmlspecialchars($kelas['nama']) ?></p>
                <p><strong>Harga:</strong> Rp <?= number_format($kelas['harga'], 0, ',', '.') ?></p>

                <form action="proses_pembayaran.php" method="post">
                    <input type="hidden" name="kelas" value="<?= htmlspecialchars($kelasDipilih) ?>">
                    <input type="hidden" name="harga" value="<?= $kelas['harga'] ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Aktif</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Lanjut ke Pembayaran</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
