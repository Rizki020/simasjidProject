<?php 
global $conn;
$conn = mysqli_connect("localhost", "root", "", "simasjid");
if(!$conn) {
    die("koneksi gagal");
}

?>