<?php

$koneksi = mysqli_connect('localhost', 'root', '', '2106015_agus');

$banner = $_POST['banner'];
$namaEvent = $_POST['namaEvent'];
$deskripsi = $_POST['deskripsi'];
$penyelenggara = $_POST['penyelenggara'];
$kontak = $_POST['kontak'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$kategori = $_POST['kategori'];
$biaya = $_POST['biaya'];
$linkPendaftaran = $_POST['linkPendaftaran'];
$thb = $_POST['thb'];
$tambahan = $_POST['tambahan'];

$query = "INSERT INTO agus_aeo VALUES(
    NULL, 
    '$banner', 
    '$namaEvent', 
    '$deskripsi', 
    '$penyelenggara', 
    '$kontak', 
    '$email', 
    '$tanggal', 
    '$alamat', 
    '$kategori', 
    '$biaya', 
    '$linkPendaftaran', 
    '$thb', 
    '$tambahan')";

mysqli_query($koneksi, $query);
header("location: ./index.php");
exit;
