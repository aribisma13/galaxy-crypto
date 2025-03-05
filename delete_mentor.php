<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id_mentor = $_GET['id'];

// Hapus data mentor berdasarkan ID
$sql = "DELETE FROM mentor WHERE id_mentor = $id_mentor";

if ($conn->query($sql) === TRUE) {
    echo "Data mentor berhasil dihapus!";
    header("Location: mentor.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
