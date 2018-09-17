<?php
  include 'koneksi.php';

  try {
    $username = $_POST['username'];
    $pass = $_POST['password'];
	$kode = $_POST['kode'];
    
    $sql = $conn->prepare("SELECT id, username, password, nohp FROM anggota WHERE username = '$username' AND password='$pass' AND kode= '$kode'");
    $sql->execute();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    $row = $sql->rowCount();
    if($row > 0){
      $data["status"] = 1;
      echo json_encode($data);
    }else{
      $data["status"] = 0;
      echo json_encode($data);
    }
    
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>