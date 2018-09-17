<?php
include 'koneksi.php';
try {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $status = $_POST['status'];
	$gender = $_POST['gender'];
	$parent = $_POST['parent'];
	$urutan = $_POST['urutan'];
	$kode = $_POST['kode'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $conn->prepare("INSERT INTO anggota (nama,alamat,ttl,nohp,email,status,gender,parent,urutan,kode,username,password) 
        VALUES ('$nama','$alamat','$ttl','$nohp','$email','$status','$gender','$parent','$urutan','$kode','$username','$password')");

    $sql->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>