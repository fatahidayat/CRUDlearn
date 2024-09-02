<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <h2>DATA PESERTA</h2><br>
    <a href="tambah.php">+ TAMBAH PESERTA</a><br><br>
    <tr>
    <th>Id Peserta</th>
    <th>Nama</th>
    <th>Sekolah</th>
    <th>Jurusan</th>
    <th>No HP</th>
    <th>Alamat</th>
    </tr>
    
    <?php 
    include 'koneksi.php';
    $data = mysqli_query($koneksi,"select * from peserta"); //nama table
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr> 
        <td><?php echo $d['id_peserta']; //nama kolom ?></td> 
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['sekolah']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td><?php echo $d['no_hp']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
            <a href="edit.php?id_peserta=<?php echo $d['id_peserta']; ?>">EDIT</a>
            <a href="delete.php?id_peserta=<?php echo $d['id_peserta']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">HAPUS</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>