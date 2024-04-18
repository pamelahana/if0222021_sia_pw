<?php

require_once "app/Mhsw.php";

$mhsw = new Mhsw(); 

$rows = $mhsw->ambilData();
if (!empty($rows)) {
    echo "<h2>Data Mahasiswa:</h2>"; 
    echo "<table border='1'>"; 
            <th>NO</th>
            <th>NIM</th>
    echo "<tr>
            <th>NAMA</th>
            <th>ALAMAT</th>
        </tr>";
    foreach ($rows as $row) { 
        echo "<tr>
                <td>{$row['mhsw_id']}</td>
                <td>{$row['mhsw_nim']}</td>
                <td>{$row['mhsw_nama']}</td>
                <td>{$row['mhsw_alamat']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.<br>"; 
}
?>
