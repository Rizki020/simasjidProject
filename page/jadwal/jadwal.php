<?php 
session_start();
if(!isset($_SESSION['username'])){
  header('Location: login.php'); 
  exit;
}
?>
<div class="container">
    <div class="row">
    <div class="col-12">
            <form action="" method="POST">
                <label>Tanggal</label>
                <input type="date" name="tgl">
                <label>Penceramah</label>
                <select name="ceramah">
                <option value="">--Pilih--</option>
                <?php
                     $sql = $conn->query("SELECT nm_ustad FROM kajian");

                     while ($data = $sql->fetch_assoc()) {
                        echo "<option value='$data[id_kajian]$data[nm_ustad]'> $data[nm_ustad]</option>"; 
                     }
                     ?>
                </select>  
            <!-- batas -->
             
            <label>Waktu</label>
                <input type="time" name="waktu">   
            <!-- batas --> 
            <label>Hari</label>
            <select name="hari">
                <option value="">--Pilih--</option>
                <option value="Senin">Senin</option> 
                <option value="Selasa">Selasa</option> 
                <option value="Rabu">Rabu</option> 
                <option value="Kamis">Kamis</option> 
                <option value="Juma'at">Juma'at</option> 
                <option value="Sabtu">Sabtu</option> 
                <option value="Minggu">Minggu</option> 
                </select> 
            <!-- batas --> 
            <label>Kajian</label>
            <select name="kajian">
                <option value="">--Pilih--</option>
                <?php
                     $sql2 = $conn->query("SELECT nm_kajian FROM kajian");

                     while ($data2 = $sql2->fetch_assoc()) {
                        echo "<option value='$data2[id_kajian]$data2[nm_kajian]'> $data2[nm_kajian]</option>"; 
                     }
                     ?>
                </select> 
                
            <!-- batas -->
            <div class="col-12 text-center mt-4">  
            <button type="submit" name="saveJ" class="btn btn-success">Tambah Jadwal Kajian</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- proses save data -->
<?php 
if(isset($_POST['saveJ'])) {
    
    $tgl = $_POST['tgl'];
    $ceramah = $_POST['ceramah'];
    $waktu = $_POST['waktu'];
    $hari = $_POST['hari'];
    $kajian = $_POST['kajian'];
    

    $result = $conn->query("INSERT INTO jadwal(waktu,tanggal,penceramah,hari,kajian)VALUES('$waktu','$tgl','$ceramah','$hari','$kajian')")or die(mysqli_connect_error($conn));

    if($result > 0) {
    echo "<script>
    document.location.href= '?page=jadwal';  
    </script>";
    } else {
    echo "Gagal Edit data";
    }
    }


?>

<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Penceramah</th>
    <th>Waktu</th>
    <th>Hari</th>
    <th>Kajian</th>
    <th>Opsi</th>
</tr>
</thead>
<tbody>
    <?php 
    $result = $conn->query("SELECT * FROM jadwal ORDER BY tanggal DESC");
    foreach($result as $data):
    ?>
<tr>
    <td><?= ++$no; ?></td>
    <td><?= date("d/M/Y", strtotime($data['tanggal'])); ?></td>
    <td><?= $data['penceramah']; ?></td>
    <td><?= date("h:i:s A", strtotime($data['waktu'])); ?></td>
    <td><?= $data['hari']; ?></td>
    <td><?= $data['kajian']; ?></td>
    <td>
        <a href="?page=hapusJ&kode=<?= $data['id_jadwal']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

