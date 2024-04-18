<?php
require_once "app/Mhsw.php";
$Mhsw = new mhsw(); 
if (!isset($_GET['id'])) {
    echo "ID mahasiswa untuk update tidak tersedia.";
    exit();
}
$idToUpdate = $_GET['id'];

$dataMahasiswa = $Mhsw->getDataById($idToUpdate); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $Mhsw->update($idToUpdate, $nim, $nama, $alamat); 
    header("Location: indexx.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>

    <h2>Update Data Mahasiswa</h2>
    <form action="update_form.php?id=<?php echo $idToUpdate; ?>" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?php echo $dataMahasiswa['mhsw_nim']; ?>"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $dataMahasiswa['mhsw_nama']; ?>"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?php echo $dataMahasiswa['mhsw_alamat']; ?>"><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>

</body>
</html>
