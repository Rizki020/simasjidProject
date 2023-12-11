<?php 
$id = $_GET['kode'];
$query = $conn->query("SELECT foto FROM sarana WHERE id_sapra='$id'");
$foto = mysqli_fetch_assoc($query);
$hapus = 'img/sarana/'.$foto['foto'];
unlink($hapus);


$result = $conn->query("DELETE FROM sarana WHERE id_sapra = '$id'");

if($result > 0) {
    echo "<script>
            document.location.href= '?page=sarana';  
          </script>";
} else {
    echo "Gagal hapus data";
}

?>