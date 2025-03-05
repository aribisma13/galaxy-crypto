<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Hapus data berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

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
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
