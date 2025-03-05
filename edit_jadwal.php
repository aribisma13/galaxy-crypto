<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID dari URL
$id_jadwal = $_GET['id'];

// Ambil data jadwal berdasarkan ID
$sql = "SELECT * FROM jadwal WHERE id_jadwal = $id_jadwal";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!$row) {
    echo "Jadwal tidak ditemukan.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama_student = $_POST['nama_student'];
    $nama_mentor = $_POST['nama_mentor'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];
    $tempat = $_POST['tempat'];
    $keterangan = $_POST['keterangan'];

    // Query untuk mengupdate data
    $sql = "UPDATE jadwal SET
        nama_student='$nama_student',
        nama_mentor='$nama_mentor',
        jenis_kursus='$jenis_kursus',
        tanggal_mulai='$tanggal_mulai',
        waktu_mulai='$waktu_mulai',
        waktu_selesai='$waktu_selesai',
        tempat='$tempat',
        keterangan='$keterangan'
        WHERE id_jadwal=$id_jadwal";

    if ($conn->query($sql) === TRUE) {
        header("Location: jadwal.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal</title>

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
                <h5>Edit Data Jadwal</h5>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_student">Nama Student</label>
                        <input type="text" class="form-control" id="nama_student" name="nama_student" value="<?php echo $row['nama_student']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_mentor">Nama Mentor</label>
                        <input type="text" class="form-control" id="nama_mentor" name="nama_mentor" value="<?php echo $row['nama_mentor']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kursus">Jenis Kursus</label>
                        <input type="text" class="form-control" id="jenis_kursus" name="jenis_kursus" value="<?php echo $row['jenis_kursus']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo $row['tanggal_mulai']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu_mulai">Waktu Mulai</label>
                        <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" value="<?php echo $row['waktu_mulai']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu_selesai">Waktu Selesai</label>
                        <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" value="<?php echo $row['waktu_selesai']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat">Tempat</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $row['tempat']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?php echo $row['keterangan']; ?></textarea>
                    </div>
                    <div class="card-footer text-right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="jadwal.php" class="btn btn-secondary">Kembali</a>
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
