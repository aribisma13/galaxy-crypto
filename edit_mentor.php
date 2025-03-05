<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id_mentor = $_GET['id'];

// Ambil data mentor berdasarkan ID
$sql = "SELECT * FROM mentor WHERE id_mentor = $id_mentor";
$result = $conn->query($sql);
$mentor = $result->fetch_assoc();

// Jika data mentor tidak ditemukan
if (!$mentor) {
    echo "Mentor tidak ditemukan.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $alamat_tempat_tinggal = $_POST['alamat_tempat_tinggal'];
    $nomor_telepon_whatsapp = $_POST['nomor_telepon'];
    $alamat_email = $_POST['alamat_email'];
    $riwayat_pendidikan_formal = $_POST['riwayat_pendidikan'];
    $gelar_akademik = $_POST['gelar_akademik'];
    $pengalaman_mengajar_sebelumnya = $_POST['pengalaman_mengajar'];
    $bidang_keahlian_mata_pelajaran = $_POST['bidang_keahlian'];

    // Cek apakah foto baru diupload
    if ($_FILES['foto']['name']) {
        $foto = $_FILES['foto']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($foto);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
        $foto_sql = ", foto = '$target_file'";
    } else {
        $foto_sql = "";
    }

    // Update data mentor
    $sql = "UPDATE mentor SET
            nama_lengkap = '$nama_lengkap',
            tempat_tanggal_lahir = '$tempat_tanggal_lahir',
            alamat_tempat_tinggal = '$alamat_tempat_tinggal',
            nomor_telepon_whatsapp = '$nomor_telepon_whatsapp',
            alamat_email = '$alamat_email',
            riwayat_pendidikan_formal = '$riwayat_pendidikan_formal',
            gelar_akademik = '$gelar_akademik',
            pengalaman_mengajar_sebelumnya = '$pengalaman_mengajar_sebelumnya',
            bidang_keahlian_mata_pelajaran = '$bidang_keahlian_mata_pelajaran'
            $foto_sql
            WHERE id_mentor = $id_mentor";

    if ($conn->query($sql) === TRUE) {
        echo "Data mentor berhasil diupdate!";
        header("Location: mentor.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mentor</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5>Edit Data Mentor</h5>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= htmlspecialchars($mentor['nama_lengkap'], ENT_QUOTES) ?>" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_tanggal_lahir">Tempat dan Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="<?= htmlspecialchars($mentor['tempat_tanggal_lahir'], ENT_QUOTES) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_tempat_tinggal">Alamat Tempat Tinggal</label>
                        <textarea class="form-control" id="alamat_tempat_tinggal" name="alamat_tempat_tinggal" placeholder="Masukkan Alamat" rows="3" required><?= htmlspecialchars($mentor['alamat_tempat_tinggal'], ENT_QUOTES) ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon / WhatsApp</label>
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?= htmlspecialchars($mentor['nomor_telepon_whatsapp'], ENT_QUOTES) ?>" placeholder="Masukkan No WhatsApp" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_email">Alamat Email</label>
                        <input type="email" class="form-control" id="alamat_email" name="alamat_email" value="<?= htmlspecialchars($mentor['alamat_email'], ENT_QUOTES) ?>" placeholder="Masukkan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                        <p class="mt-2">Foto saat ini:</p>
                        <img src="<?= htmlspecialchars($mentor['foto'], ENT_QUOTES) ?>" alt="Foto Mentor" style="width: 130px; height: 150px;">
                    </div>
                    <div class="form-group">
                        <label for="riwayat_pendidikan">Riwayat Pendidikan</label>
                        <textarea class="form-control" id="riwayat_pendidikan" name="riwayat_pendidikan" placeholder="Riwayat Pendidikan" rows="3" required><?= htmlspecialchars($mentor['riwayat_pendidikan_formal'], ENT_QUOTES) ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gelar_akademik">Gelar Akademik</label>
                        <input type="text" class="form-control" id="gelar_akademik" name="gelar_akademik" value="<?= htmlspecialchars($mentor['gelar_akademik'], ENT_QUOTES) ?>" placeholder="Masukkan Gelar Akademik" required>
                    </div>
                    <div class="form-group">
                        <label for="pengalaman_mengajar">Pengalaman Mengajar</label>
                        <textarea class="form-control" id="pengalaman_mengajar" name="pengalaman_mengajar" placeholder="Pengalaman Mengajar" rows="3" required><?= htmlspecialchars($mentor['pengalaman_mengajar_sebelumnya'], ENT_QUOTES) ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bidang_keahlian">Bidang Keahlian</label>
                        <input type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian" value="<?= htmlspecialchars($mentor['bidang_keahlian_mata_pelajaran'], ENT_QUOTES) ?>" placeholder="Bidang Keahlian" required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="mentor.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>

