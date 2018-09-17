<?php 
  include 'koneksi.php';

  try {
    $agenda = $_POST['agenda'];
    $sql = $conn->prepare("SELECT * FROM event WHERE agenda = '$agenda'");
    $sql->execute();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
