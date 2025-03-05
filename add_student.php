<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_whatsapp = $_POST['no_whatsapp'];
$status_pembayaran = $_POST['status_pembayaran'];

// Proses upload foto
$foto = $_FILES['foto']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($foto);
move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

// Query untuk memasukkan data ke tabel student
$sql = "INSERT INTO student (nama, alamat, no_whatsapp, foto, status_pembayaran)
        VALUES ('$nama', '$alamat', '$no_whatsapp', '$target_file', '$status_pembayaran')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
    header("Location: student.php"); // Redirect setelah berhasil
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
