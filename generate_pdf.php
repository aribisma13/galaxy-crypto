<?php
require 'vendor/autoload.php'; // Pastikan path ini sesuai dengan lokasi autoload.php dari Composer

use Dompdf\Dompdf;

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "crypto");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel jadwal
$sql = "SELECT * FROM jadwal";
$result = $conn->query($sql);

// Buat HTML untuk PDF
$html = '<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Kursus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Jadwal Kursus</h1>
    <table>
        <tr>
            <th>ID Jadwal</th>
            <th>Nama Student</th>
            <th>Nama Mentor</th>
            <th>Jenis Kursus</th>
            <th>Tanggal Mulai</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th>Tempat</th>
            <th>Keterangan</th>
        </tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
            <td>' . $row['id_jadwal'] . '</td>
            <td>' . $row['nama_student'] . '</td>
            <td>' . $row['nama_mentor'] . '</td>
            <td>' . $row['jenis_kursus'] . '</td>
            <td>' . $row['tanggal_mulai'] . '</td>
            <td>' . $row['waktu_mulai'] . '</td>
            <td>' . $row['waktu_selesai'] . '</td>
            <td>' . $row['tempat'] . '</td>
            <td>' . $row['keterangan'] . '</td>
        </tr>';
    }
} else {
    $html .= '<tr><td colspan="9">Tidak ada data</td></tr>';
}

$html .= '</table>
</body>
</html>';

// Inisialisasi Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Opsional) Atur ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');

// Render HTML sebagai PDF
$dompdf->render();

// Output PDF ke browser
$dompdf->stream("jadwal_kursus.pdf", array("Attachment" => false));
?>
