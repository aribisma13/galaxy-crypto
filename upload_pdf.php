<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf_file'])) {
    $file = $_FILES['pdf_file'];
    $targetDir = __DIR__ . "/modules/";
    $fileName = basename($file['name']); // Simpan nama asli
    $targetFile = $targetDir . $fileName;

    $fileType = mime_content_type($file['tmp_name']);

    if ($fileType === 'application/pdf') {
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            echo "<script>alert('✅ PDF berhasil diunggah.'); window.location.href='module_terbaru.php';</script>";
        } else {
            echo "<script>alert('❌ Gagal mengunggah file.'); window.location.href='module_terbaru.php';</script>";
        }
    } else {
        echo "<script>alert('⚠️ Hanya file PDF yang diperbolehkan.'); window.location.href='module_terbaru.php';</script>";
    }
} else {
    echo "<script>window.location.href='module_terbaru.php';</script>";
}
?>
