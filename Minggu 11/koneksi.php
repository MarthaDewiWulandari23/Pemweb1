<?php
$koneksi = mysqli_connect("localhost","root","","sekolah1");
// "server","user","password","nama database"
// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>