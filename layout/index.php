<?php
$host     ="localhost";
$user     ="root";
$pass     ="";
$db       ="dbakademik";

$koneksi  = mysqli_connect($host,$user,$pass,$db);
if (!$koneksi) { //cek koneksi
    die ("Tidak bisa terkoneksi ke database");
}

require_once "Mhsw.php";

$Mhsw = new mhsw();
$rows = $mhsw->tampil();

?>
<!DOCTYPE html>
<html lang="end">
<body>
<fieldset>
        <legend>data mahsiswa</legend>
        <p>
            <label>NIM:</label>
            <input type="text" name="mhsw_nim" placeholder="..." />
        </p>
        <p>
            <label>NAMA:</label>
            <input type="text" name="mhsw_nama" placeholder="nama lengkap..." />
        </p>
        <p>
            <label>ALAMAT:</label>
            <input type="email" name="mhsw_alamat" placeholder="..." />
        </p>
        <p>
            <input type="submit" name="submit" value="Tambah Data" />
        </p>
        </fieldset>
</body>

    <from action ="index.php" method="post"->

    <table border="1">
        <tr>
            <td>NO</td>
            <td>NIM</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>Action</td>
        </tr>

        <?php foreach ($rows as $row) { ?>
            
            <tr>
                <td><?php echo $row['mhsw_id']; ?></td>
                <td><?php echo $row['mhsw_nim']; ?></td>
                <td><?php echo $row['mhsw_nama']; ?></td>
                <td><?php echo $row['mhsw_alamat']; ?></td>
                <td colspan="2" align="center">  
                <input type="submit" nama="update" value="update" />
                <input type="reset" nama="delete" value="delete"/></td>
                
            </tr>
        <?php } ?>
    </table>

