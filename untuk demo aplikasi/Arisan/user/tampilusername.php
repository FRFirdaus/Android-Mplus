<?php 
  include 'koneksi.php';

  try {
    $username = $_POST['username'];
    $sql = $conn->prepare("SELECT * FROM anggota WHERE username = '$username'");
    $sql->execute();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
