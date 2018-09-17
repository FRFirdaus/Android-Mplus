<?php
include 'koneksi.php';
try {
  
	$kode = $_POST['kode'];

    $sql = $conn->prepare("INSERT INTO reg_keluarga (kode) 
        VALUES ('$kode')");
    $sql->execute();
	
} catch (Exception $e) {
    echo $e->getMessage();
}
?>