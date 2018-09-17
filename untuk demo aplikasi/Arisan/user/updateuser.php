<?php 
include 'koneksi.php';
try {

    // $nama = 'rehan';
    // $alamat = 'depok';
    // $ttl = '17-10-1996';
    // $nohp = '081381933177';
    // $status = 'anak';
    // $username = 'rehan';
    // $password = '123';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $status = $_POST['status'];
	$gender = $_POST['gender'];
	$parent = $_POST['parent'];
	$urutan = $_POST['urutan'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //import file koneksi database 
    
    //Membuat SQL Query
    $sql = $conn->prepare("UPDATE anggota SET nama = '$nama', alamat = '$alamat', ttl = '$ttl', nohp = '$nohp', email = '$email', status = '$status', gender = '$gender', parent = '$parent', urutan = '$urutan', username = '$username', password = '$password' WHERE nama = '$nama'");
    
    //Meng-update Database 
    $sql->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
