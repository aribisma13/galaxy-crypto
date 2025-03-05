<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama_student = $_POST['nama_student'];
$nama_mentor = $_POST['nama_mentor'];
$jenis_kursus = $_POST['jenis_kursus'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];
$tempat = $_POST['tempat'];
$keterangan = $_POST['keterangan'];

// Query untuk menambah data
$sql = "INSERT INTO jadwal (nama_student, nama_mentor, jenis_kursus, tanggal_mulai, waktu_mulai, waktu_selesai, tempat, keterangan)
VALUES ('$nama_student', '$nama_mentor', '$jenis_kursus', '$tanggal_mulai', '$waktu_mulai', '$waktu_selesai', '$tempat', '$keterangan')";

if ($conn->query($sql) === TRUE) {
    echo "Data jadwal berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: jadwal.php");
exit();
?>
