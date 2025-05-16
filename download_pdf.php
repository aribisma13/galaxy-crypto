<?php
// Matikan output buffering jika aktif
if (ob_get_level()) {
    ob_end_clean();
}

// Validasi parameter
if (isset($_GET['file'])) {
    $filename = basename($_GET['file']); // Hindari traversal path
    $filepath = __DIR__ . '/modules/' . $filename; // Lokasi file PDF

    // Cek apakah file ada
    if (file_exists($filepath)) {
        // Set header untuk memaksa browser download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream'); // Untuk memastikan bukan preview
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));

        // Bersihkan buffer sebelum output
        flush();

        // Kirim file ke browser
        readfile($filepath);
        exit;
    } else {
        // File tidak ditemukan
        http_response_code(404);
        echo 'File tidak ditemukan.';
    }
} else {
    // Parameter tidak valid
    http_response_code(400);
    echo 'Parameter tidak valid.';
}

