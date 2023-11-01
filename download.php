
<?php
$file1 = $_POST['file1'];
$file2 = $_POST['file2'];

if (file_exists($file1) && file_exists($file2)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file1) . '"');
    header('Content-Length: ' . filesize($file1));
    readfile($file1);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file2) . '"');
    header('Content-Length: ' . filesize($file2));
    readfile($file2);
} else {
    echo "Een of beide bestanden zijn niet beschikbaar.";
}
?>