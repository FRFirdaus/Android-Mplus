<?php 
 include 'koneksi.php';
 try {
    $agenda = $_POST['agenda'];
    $lokasi = $_POST['lokasi'];
    $waktu = $_POST['waktu'];
    $host = $_POST['host'];

    $sql = $conn->prepare("DELETE FROM event WHERE agenda='$agenda';");
    $sql->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>