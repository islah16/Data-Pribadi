<?php

$mahasiswa = [
    [  
        "NIM" => "D212111007",
        "Nama" => "Ikhlas Wandana"
    ],
    [
        "NIM" => "D212111008",
        "Nama" => "Intan Khoirunnisa"
    ],
    [  
        "NIM" => "D212111009",
        "Nama" => "Islah Nurhasanah"
    ],
    [
        "NIM" => "D212111010",
        "Nama" => "Kenia Nur Azizah"
    ],
    [  
        "NIM" => "D212111011",
        "Nama" => "M. Rivaldi Hafiz F"
    ],
];

echo "<table border = 1 cellspacing = 0 cellpadding= 5px >";
echo "<tr><th>No</th><th>NIM</th><th>Nama</th></tr>";
$nomor = 1;
foreach ($mahasiswa as $value) {
    echo "<tr>";
    echo "<td>" .$nomor++.  "</td>";
    echo "<td>"  .$value["NIM"].  "</td>";
    echo "<td>"  .$value["Nama"].  "</td>";
    echo "</tr>";
}
echo "</table>"
?>