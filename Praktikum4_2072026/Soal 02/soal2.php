<?php
    $angka1 = $_GET['angka1'];
    $angka2 = $_GET['angka2'];
    $hasil = $_GET['hasil'];

    if (is_numeric($angka1) && is_numeric($angka2)) {
        $hasil = $angka1 + $angka2
        $hasil = $angka1 - $angka2
        $hasil = $angka1 * $angka2
        $hasil = $angka1 / $angka2
    }
    echo("<h1>Hasil : <?php $hasil ?></h1>");
    
?>