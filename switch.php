<?php

$role = "admin";
switch ($role) {
    case "admin":
        echo "akses penuh sistem";
        break;
    case "dosen":
        echo "akses data mahasiswa";
        break;
    case "mahasiswa":
        echo "akses pengisian KRS";
        break;
    default:
            echo "tidak dikenal.";
    }
?>
<br>
<a href="index.html">balik yuk</a>