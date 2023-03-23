<?php
if(!isset($_GET['download_file'])){
    header("location:index.php");
}
if(isset($_GET['download_file'])){
    $filename = $_GET['download_file'];
    if(file_exists("file/".$filename)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename("file/".$filename) . '"'); 
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize("file/".$filename));
        readfile("file/".$filename);
        exit;
    }else{
        echo "file do not exists";
    }
}
?>