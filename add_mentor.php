<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $alamat_tempat_tinggal = $_POST['alamat_tempat_tinggal'];
    $nomor_telepon_whatsapp = $_POST['nomor_telepon'];
    $alamat_email = $_POST['alamat_email'];
    $foto = $_FILES['foto']['name'];
    $riwayat_pendidikan_formal = $_POST['riwayat_pendidikan'];
    $gelar_akademik = $_POST['gelar_akademik'];
    $pengalaman_mengajar_sebelumnya = $_POST['pengalaman_mengajar'];
    $bidang_keahlian_mata_pelajaran = $_POST['bidang_keahlian'];

    // Menyimpan foto
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto);
    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO mentor (nama_lengkap, tempat_tanggal_lahir, alamat_tempat_tinggal, nomor_telepon_whatsapp, alamat_email, foto, riwayat_pendidikan_formal, gelar_akademik, pengalaman_mengajar_sebelumnya, bidang_keahlian_mata_pelajaran)
            VALUES ('$nama_lengkap', '$tempat_tanggal_lahir', '$alamat_tempat_tinggal', '$nomor_telepon_whatsapp', '$alamat_email', '$target_file', '$riwayat_pendidikan_formal', '$gelar_akademik', '$pengalaman_mengajar_sebelumnya', '$bidang_keahlian_mata_pelajaran')";

    if ($conn->query($sql) === TRUE) {
        echo "Data mentor berhasil ditambahkan!";
        header("Location: mentor.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
