<?php 
include 'koneksi.php';

// Validasi untuk memastikan id_peserta ada di URL
if (isset($_GET['id_peserta'])) {
    $id_peserta = $_GET['id_peserta'];

    // Query untuk mengambil data peserta berdasarkan id_peserta
    $result = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id_peserta='$id_peserta'");

    // Periksa apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID Peserta tidak ada di URL!";
    exit;
}
?>

<form action="update.php" method="post">
    <input type="hidden" name="id_peserta" value="<?php echo htmlspecialchars($row['id_peserta']); ?>">

    <label for="nama">Nama:</label>
    <input type="text" name="Fnama" id="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required><br>

    <label for="sekolah">Sekolah:</label>
    <input type="text" name="Fsekolah" id="sekolah" value="<?php echo htmlspecialchars($row['sekolah']); ?>" required><br>

    <label for="jurusan">Jurusan:</label>
    <input type="text" name="Fjurusan" id="jurusan" value="<?php echo htmlspecialchars($row['jurusan']); ?>" required><br>

    <label for="no_hp">No HP:</label>
    <input type="text" name="Fno_hp" id="no_hp" value="<?php echo htmlspecialchars($row['no_hp']); ?>" required><br>

    <label for="alamat">Alamat:</label>
    <textarea name="Falamat" id="alamat" required><?php echo htmlspecialchars($row['alamat']); ?></textarea><br>

    <input type="submit" value="Update">
</form>