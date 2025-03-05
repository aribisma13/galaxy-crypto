<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_student = $_POST['id_student'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];

    // Query untuk menambahkan data ke tabel pendidikan
    $sql = "INSERT INTO pendidikan (id_student, jenis_kursus, tanggal_mulai, tanggal_selesai)
            VALUES ('$id_student', '$jenis_kursus', '$tanggal_mulai', '$tanggal_selesai')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Data pendidikan berhasil ditambahkan');
            window.location.href='pendidikan.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
