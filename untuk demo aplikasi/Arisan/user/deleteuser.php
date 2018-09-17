<?php 
 include 'koneksi.php';
 try {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $nohp = $_POST['nohp'];
    $status = $_POST['status'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $conn->prepare("DELETE FROM anggota WHERE nama='$nama';");
    $sql->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>