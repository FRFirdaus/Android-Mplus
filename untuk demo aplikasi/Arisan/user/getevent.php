<?php 
  include 'koneksi.php';

  try {
    $sql = $conn->prepare("SELECT * FROM event");
    $sql->execute();
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>