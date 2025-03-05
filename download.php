<?php
if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // Prevent directory traversal
    $filepath = 'images/' . $file;

    if (file_exists($filepath)) {
        // Set headers for download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));

        readfile($filepath);
        exit;
    } else {
        echo "File not found!";
    }
}
?>