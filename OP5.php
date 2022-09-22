<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Data</title>
</head>
<body>
    <h2 align="center"> Data Mahasiswa </h2>
    <table border="1" align="center" width="100%">
        <tr bgcolor="pink">
            <th>Id_mhs</th>
            <th>Id_Prodi</th>
            <th>Nama_Mahasiswa</th>
            <th>Alamat</th>
            <th>Nama Prodi</th>
            <th>Keterangan</th>

        </tr>
        <tr>
            <?php 
            include "koneksi.php" ;
            $query =mysqli_query($koneksi,"SELECT tbl_mhs.*, tbl_prodi.* FROM tbl_mhs, tbl_prodi
WHERE tbl_mhs.id_prodi=tbl_prodi.id_prodi;");
            while ($data=mysqli_fetch_array($query)) {
    
            ?>
        </tr>
        <tr>
            <td><?php echo $data['id_mhs']; ?></td>
            <td><?php echo $data['id_prodi']; ?></td>
            <td><?php echo $data['nama_mhs']; ?></td>
            <td><?php echo $data['alamat_mhs']; ?></td>
            <td><?php echo $data['nama_prodi']; ?></td>
            <td><?php echo $data['ket_prodi']; }?></td>
        </tr>
    

    </table>

</body>
</html>