<?php 
  include 'koneksi.php';

  try {
	$kode = $_POST['kode'];
    $sql = $conn->prepare("SELECT * FROM anggota where kode ='$kode'");
    $sql->execute();
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>