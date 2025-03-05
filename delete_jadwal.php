<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID dari URL
$id_jadwal = $_GET['id'];

// Query untuk menghapus data
$sql = "DELETE FROM jadwal WHERE id_jadwal = $id_jadwal";

if ($conn->query($sql) === TRUE) {
    echo "Data jadwal berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: jadwal.php");
exit();
?>