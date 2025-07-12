<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi variabel untuk pesan error
$errorMessage = "";
$showModal = false;

// Hapus data berdasarkan ID
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Mencegah SQL Injection

    // Cek apakah ada data terkait di tabel pendidikan
    $queryCheck = "SELECT * FROM pendidikan WHERE id_student = $id";
    $resultCheck = $conn->query($queryCheck);
    if ($resultCheck->num_rows > 0) {
        $errorMessage = "Data anda duplicate, harap hapus data pendidikan terlebih dahulu.";
        $showModal = true;
    } else {
        // Ambil foto untuk dihapus dari folder jika ada
        $queryFoto = "SELECT foto FROM student WHERE id_student = $id";
        $resultFoto = $conn->query($queryFoto);
        if ($resultFoto->num_rows > 0) {
            $dataFoto = $resultFoto->fetch_assoc();
            $fotoPath = $dataFoto['foto'];
            if (file_exists($fotoPath)) {
                unlink($fotoPath); // Hapus file foto dari server
            }
        }

        // Query delete
        $sql = "DELETE FROM student WHERE id_student = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: student.php?status=deleted");
            exit();
        } else {
            $errorMessage = "Error: Gagal menghapus data. " . addslashes($conn->error);
            $showModal = true;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $errorMessage; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='student.php'">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        <?php if ($showModal): ?>
            // Tampilkan modal saat halaman dimuat
            var myModal = new bootstrap.Modal(document.getElementById('errorModal'), {
                keyboard: false
            });
            myModal.show();
        <?php endif; ?>
    </script>
</body>
</html>