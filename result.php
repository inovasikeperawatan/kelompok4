<?php
    if(isset($_POST['tambah'])) {
        $namalengkap = $_POST['namalengkap'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn, "INSERT INTO temuin VALUES(NULL,'$namalengkap','$alamat','$username','$password','Karyawan')");

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