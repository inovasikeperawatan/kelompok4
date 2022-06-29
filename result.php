<?php
    include_once("../temuin/connection.php");
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $pilihancardAgama = $_POST['pilihancardAgama'];
        $pilihancardUmur = $_POST['pilihancardUmur'];
        $pilihancardLingkungan = $_POST['pilihancardLingkungan'];
        $pilihancard1 = $_POST['pilihancard1'];
        $pilihancard2 = $_POST['pilihancard2'];
        $pilihancard3 = $_POST['pilihancard3'];
        $pilihancard4 = $_POST['pilihancard4'];
        $pilihancard5 = $_POST['pilihancard5'];
        $pilihancard6 = $_POST['pilihancard6'];
        $pilihancard7 = $_POST['pilihancard7'];
        $pilihancard8 = $_POST['pilihancard8'];
        $pilihancard9 = $_POST['pilihancard9'];
        $pilihancard10 = $_POST['pilihancard10'];

        $query = mysqli_query($conn, "INSERT INTO temuin VALUES(NULL,'$nama','$pilihancardAgama','$pilihancardUmur','$pilihancardLingkungan','$pilihancard1','$pilihancard2','$pilihancard3','$pilihancard4','$pilihancard5','$pilihancard6','$pilihancard7','$pilihancard8','$pilihancard9','$pilihancard10')");
    }
?>