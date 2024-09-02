<?php 
include 'koneksi.php';

// Debugging: Tampilkan data yang diterima
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Ambil data dari form
$id_peserta = $_POST['id_peserta'];
$nama = $_POST['Fnama'];
$sekolah = $_POST['Fsekolah'];
$jurusan = $_POST['Fjurusan'];
$no_hp = $_POST['Fno_hp'];
$alamat = $_POST['Falamat'];

// Siapkan statement SQL untuk memperbarui data
$stmt = $koneksi->prepare("UPDATE peserta SET nama=?, sekolah=?, jurusan=?, no_hp=?, alamat=? WHERE id_peserta=?");
$stmt->bind_param("sssssi", $nama, $sekolah, $jurusan, $no_hp, $alamat, $id_peserta);

// Eksekusi statement
if($stmt->execute()){
    echo "Update berhasil!";
    header("Location: index.php");
    exit;
} else {
    // Tampilkan pesan error jika gagal
    echo "Gagal mengupdate data: " . $stmt->error;
}

$stmt->close();
?>