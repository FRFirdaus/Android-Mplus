<?php
include 'koneksi.php';
try {
    $agenda = $_POST['agenda'];
    $lokasi = $_POST['lokasi'];
    $waktu = $_POST['waktu'];
    $host = $_POST['host'];

    $sql = $conn->prepare("INSERT INTO event (agenda,lokasi,waktu,host) 
        VALUES ('$agenda','$lokasi','$waktu','$host')");
    $sql->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>