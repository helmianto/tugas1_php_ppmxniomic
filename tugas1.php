<?php

$daftarMenu = ["Ayam Goreng", "Ayam Bakar", "Ayam Sayur", "Tempe Goreng", "Tahu Goreng", "Soto", "Nasi Putih", "Es Teh", "Es Tebu"];
$hargaMenu = ["Rp. 13000", "Rp. 15000", "Rp. 13000", "Rp. 1000", "Rp. 1000", "Rp. 3000", "Rp. 5000", "Rp. 4000", "Rp. 5000"];

echo "<h1>Daftar Menu</h1>";
echo "<table>";
echo "<ul>";
for($i = 0; $i < count($daftarMenu); $i++){
    echo "<tr>";
        echo "<td> <li></li> </td>";
        echo "<td>" . $daftarMenu[$i] . "</td>";
        echo "<td> = </td>";
        echo "<td>" . $hargaMenu[$i] . "</td>";
    echo "</tr>";
}
echo "</ul>";
echo "</table>";

?>