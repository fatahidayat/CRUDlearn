<?php 
include 'koneksi.php';

// Ambil id_peserta dari URL
$id_peserta = $_GET['id_peserta'];

// Query untuk menghapus data
$query = "DELETE FROM peserta WHERE id_peserta='$id_peserta'";

// Eksekusi query
if(mysqli_query($koneksi, $query)){
    // Redirect ke halaman utama jika berhasil
    header("Location: index.php");
} else {
    // Tampilkan pesan error jika gagal
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
?>