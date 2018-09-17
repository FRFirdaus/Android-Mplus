<?php 
  include 'koneksi.php';

  try {
    $nama = $_POST['nama'];
	$kode = $_POST['kode'];
    $sql = $conn->prepare("SELECT * FROM anggota WHERE nama = '$nama' and kode = '$kode'");
    $sql->execute();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
