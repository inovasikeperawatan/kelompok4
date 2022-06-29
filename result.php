<?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $pilihancardJK = $_POST['pilihancardJK'];
        $pilihancardAgama = $_POST['pilihancardAgama'];
        $pilihancardUmur = $_POST['pilihancardUmur'];
        $pilihancardLingkungan = $_POST['pilihancardLingkungan'];

        $query = mysqli_query($conn, "INSERT INTO temuin VALUES(NULL,'$nama','$pilihancardJK','$pilihancardAgama','$pilihancardUmur','$pilihancardLingkungan')");

        if($query) {

?>
            <script>
                alert("Berhasil");
            </script>
<?php
        } else {
?>
            <script>
                alert("Gagal");
            </script>
<?php
        }
    }
?>