<?php
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id_pendidikan'])) {
    $id_pendidikan = $_GET['id_pendidikan'];

    $sql = "DELETE FROM pendidikan WHERE id_pendidikan = $id_pendidikan";

    if ($conn->query($sql) === TRUE) {
        header("Location: pendidikan_akses.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
