<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Lihat Semua Data</a><br>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Fnama"></td>
            </tr>
            <tr>
                <td>Sekolah</td>
                <td><input type="text" name="Fsekolah"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="Fjurusan"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="Fno_hp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Falamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>