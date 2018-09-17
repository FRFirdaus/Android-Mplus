<?php 
include 'koneksi.php';
try {
    $agenda = $_POST['agenda'];
    $lokasi = $_POST['lokasi'];
    $waktu = $_POST['waktu'];
    $host = $_POST['host'];
    //import file koneksi database 
    
    //Membuat SQL Query
    $sql = $conn->prepare("UPDATE event SET agenda = '$agenda', lokasi = '$lokasi', waktu = '$waktu', host = '$host' WHERE agenda = '$agenda'");
    
    //Meng-update Database 
    $sql->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
