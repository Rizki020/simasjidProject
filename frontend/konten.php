<style>
    .list a:hover{
        color: green;
    }
</style>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="../boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../boostrap/css/style.css">
<title>Nurul Hayat</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container pb-1">
    <a class="navbar-brand fs-3 fw-bold" href="#">
    <img src="../img/sosial/logomasjid.png" width="250" height="75" class="d-inline-block align-text-top">  
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse isi" id="navbarNav">
      <ul class="navbar-nav ms-auto ps-4">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <div class="btn-group">
          <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Menu
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item" href="../index.php?page=jadwal">Jadwal Kajian</a></li>
            <li><a class="dropdown-item" href="../index.php?page=organisasi">Struktur Organisas BKM</a></li>
          </ul>
        </div>
        <!-- batad -->  
        <li class="nav-item">
          <a class="nav-link active" href="../index.php?page=kegiatan">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../index.php?page=sarana">Sarana</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../index.php?page=kontak">Kontak Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar -->


<!-- konten -->
<?php 
include "../config/koneksi.php";
$kode = $_GET['id'];


$query = $conn->query("SELECT * FROM pengumuman WHERE id_pengumuman = '$kode'");
$t = mysqli_fetch_assoc($query);

?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold"><?= $t['judul']; ?></h2>
            <div class=" mt-3">
            <img src="../img/kegiatan/<?= $t['foto']; ?>" class="rounded" width="700">
            <div class="row mt-5">
                <div class="col-sm-12">
                <p><span class="fw-bold"><?= $t['tgl']; ?>: </span><?= $t['isi_pengumuman']; ?></p>
                </div>
            </div>
             <!-- batas col -->               
          </div>
        </div>
        <!-- batas col -->
        <div class="col ps-5">
                 <h5>Informasi Terkini</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <?php 
                $query1 = $conn->query("SELECT * FROM pengumuman");
                foreach($query1 as $g) :
                ?>
                <li class="list-group-item"><a href="
                konten.php?id=<?php echo $g['id_pengumuman'] ?>" class="text-success"><?= $g['judul']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div> 
    </div>
</div>
<!-- konten -->


<!-- about -->
<footer class="fot mt-5 py-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col ps-1">
        <h4>Badan Kemakmuran Masjid</h4>
        <img src="../img/sosial/logo3.jpg" width="200" height="200" class="d-inline-block align-text-top"> 
      </div>
      <!-- batas -->
      <div class="col">
        <h4>Hubungi Kami</h4>
        <p>Jl. Bunga Ncole XIV A</p>
        <p>Tlp. 083809415317</p>
        <p>Email. Rizkikahfi12345@gmail.com</p>
          <div class="sosial">
          <img src="../img/sosial/facebook.png" width="40">
          <img src="../img/sosial/instagram.png" width="40">
          <img src="../img/sosial/twitter.png" width="40">
          <img src="../img/sosial/youtube.png" width="40">
        </div>
      </div>
      <!-- batas -->
      <div class="col">
        <h4>Q.S At-Taubah: 18</h4>
        <p>“Sesungguhnya yang memakmurkan masjid Allah hanyalah orang-orang yang beriman kepada Allah dan hari akhir, serta (tetap) menegakkan shalat, menunaikan zakat dan tidak takut kecuali hanya kepada Allah. Maka mudah-mudahan mereka termasuk orang-orang yang mendapat petunjuk.”</p>
      </div>
      <!-- batas -->
    </div>
  </div>
  <div class="copy pt-5 text-center">
    Copyright &copy; 2023 RizkiKahfi
  </div>
</footer>
<!-- about -->
<script src="../boostrap/js/popper.min.js"></script>
<script src="../boostrap/js/bootstrap.min.js"></script>
  </body>
</html>
