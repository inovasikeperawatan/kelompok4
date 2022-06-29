<?php
    include_once("../temuin/connection.php");
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $pilihancardJk = $_POST['pilihancardJk'];
        $pilihancardAgama = $_POST['pilihancardAgama'];
        $pilihancardUmur = $_POST['pilihancardUmur'];
        $pilihancardLingkungan = $_POST['pilihancardLingkungan'];

        $query = mysqli_query($conn, "INSERT INTO temuin VALUES(NULL,'$nama','$pilihancardJK','$pilihancardAgama','$pilihancardUmur','$pilihancardLingkungan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");

        var_dump($nama);
        var_dump($pilihancardJK);
        var_dump($pilihancardAgama);
        var_dump($pilihancardUmur);
        var_dump($pilihancardLingkungan);
    }
?>