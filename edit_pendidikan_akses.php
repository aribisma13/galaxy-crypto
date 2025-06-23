<?php
// Ambil ID Pendidikan dari URL
$id_pendidikan = isset($_GET['id_pendidikan']) ? $_GET['id_pendidikan'] : '';

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data berdasarkan ID
$sql = "SELECT * FROM pendidikan WHERE id_pendidikan = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id_pendidikan);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}

// Ambil data mahasiswa untuk dropdown
$sql_students = "SELECT id_student, nama FROM student";
$result_students = $conn->query($sql_students);

// Proses update data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pendidikan = $_POST['id_pendidikan'];
    $id_student = $_POST['id_student'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];

    $sql_update = "UPDATE pendidikan
                   SET id_student = ?, jenis_kursus = ?, tanggal_mulai = ?, tanggal_selesai = ?
                   WHERE id_pendidikan = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("sssss", $id_student, $jenis_kursus, $tanggal_mulai, $tanggal_selesai, $id_pendidikan);

    if ($stmt_update->execute()) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='pendidikan_akses.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pendidikan</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="h3 mb-2 text-gray-800">Edit Data Pendidikan</h1>
        <div class="card">
            <div class="card-header bg-primary text-white">Form Edit Data Pendidikan</div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id_pendidikan" value="<?= htmlspecialchars($data['id_pendidikan']); ?>">

                    <div class="form-group">
                        <label for="id_student">ID Student</label>
                        <select name="id_student" id="id_student" class="form-control" required>
                            <option value="">-- Pilih ID Student --</option>
                            <?php
                            if ($result_students->num_rows > 0) {
                                while ($row = $result_students->fetch_assoc()) {
                                    $selected = $row['id_student'] == $data['id_student'] ? "selected" : "";
                                    echo "<option value='" . $row['id_student'] . "' $selected>" . $row['id_student'] . " - " . $row['nama'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Data tidak tersedia</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kursus">Jenis Kursus</label>
                            <select name="jenis_kursus" id="jenis_kursus" class="form-control" required>
                                <option value="">-- Pilih Jenis Kursus --</option>
                                <option value="Beginner Trading Cryptocurrency" <?= $data['jenis_kursus'] == 'Beginner Trading Cryptocurrency' ? 'selected' : '' ?>>Beginner Trading Cryptocurrency</option>
                                <option value="Middle Trading Cryptocurrency" <?= $data['jenis_kursus'] == 'Middle Trading Cryptocurrency' ? 'selected' : '' ?>>Middle Trading Cryptocurrency</option>
                                <option value="Profesional Trading Cryptocurrency" <?= $data['jenis_kursus'] == 'Profesional Trading Cryptocurrency' ? 'selected' : '' ?>>Profesional Trading Cryptocurrency</option>
                                <option value="Premium Trading Cryptocurrency" <?= $data['jenis_kursus'] == 'Premium Trading Cryptocurrency' ? 'selected' : '' ?>>Premium Trading Cryptocurrency</option>
                                <option value="Lainnya" <?= $data['jenis_kursus'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                            </select>
                        </div>

                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?= htmlspecialchars($data['tanggal_mulai']); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="<?= htmlspecialchars($data['tanggal_selesai']); ?>" required>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="pendidikan.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
