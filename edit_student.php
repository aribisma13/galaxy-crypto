<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM student WHERE id_student = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
}

// Update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id_student'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_whatsapp = $_POST['no_whatsapp'];
    $status_pembayaran = $_POST['status_pembayaran'];  // Menangkap status pembayaran

    // Update foto jika ada file baru yang diunggah
    $foto = $data['foto']; // Default foto dari database
    if (!empty($_FILES['foto']['name'])) {
        $foto = 'uploads/' . basename($_FILES['foto']['name']);
        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
            die("Gagal mengupload foto");
        }
    }

    // Query update data
    $sql = "UPDATE student SET nama='$nama', alamat='$alamat', no_whatsapp='$no_whatsapp', foto='$foto', status_pembayaran='$status_pembayaran' WHERE id_student=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: student.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Data Student</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript (Load jQuery first)-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Edit Data Student</h5>
                    <a href="student.php" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="edit_student.php?id=<?= $data['id_student'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_student" value="<?= $data['id_student'] ?>">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="editNama" name="nama" value="<?= htmlspecialchars($data['nama'], ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAlamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="editAlamat" name="alamat" rows="3" required><?= htmlspecialchars($data['alamat'], ENT_QUOTES, 'UTF-8') ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editNoWhatsapp" class="form-label">No WhatsApp</label>
                            <input type="text" class="form-control" id="editNoWhatsapp" name="no_whatsapp" value="<?= htmlspecialchars($data['no_whatsapp'], ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="editFoto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="editFoto" name="foto">
                            <?php if ($data['foto']): ?>
                                <img src="<?= htmlspecialchars($data['foto'], ENT_QUOTES, 'UTF-8') ?>" alt="Foto" class="img-thumbnail mt-2" width="100">
                            <?php endif; ?>
                        </div>
                        <!-- Pilihan Status Pembayaran -->
                        <div class="mb-3">
                            <label for="statusPembayaran" class="form-label">Status Pembayaran</label>
                            <select class="form-control" id="statusPembayaran" name="status_pembayaran" required>
                                <option value="Lunas" <?= ($data['status_pembayaran'] == 'Lunas') ? 'selected' : ''; ?>>Lunas</option>
                                <option value="Deposit" <?= ($data['status_pembayaran'] == 'Deposit') ? 'selected' : ''; ?>>Deposit</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="student.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>