<?php 
$id = $_GET['kode'];

$result = $conn->query("DELETE FROM jadwal WHERE id_jadwal = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=jadwal';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>