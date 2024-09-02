<?php 
include 'koneksi.php';

// Ambil data dari form
$nama = $_POST['Fnama'];
$sekolah = $_POST['Fsekolah'];
$jurusan = $_POST['Fjurusan'];
$no_hp = $_POST['Fno_hp'];
$alamat = $_POST['Falamat'];

// Query untuk menambahkan data ke tabel peserta
mysqli_query($koneksi, "INSERT INTO peserta (nama, sekolah, jurusan, no_hp, alamat) VALUES('$nama','$sekolah','$jurusan','$no_hp','$alamat')");

// Redirect ke halaman utama setelah berhasil menambahkan data
header("location:index.php");
?>