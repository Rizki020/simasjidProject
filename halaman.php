
<div class="akses">
<!-- corosuel -->
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide/slidemasjid.jpg" witdh="300" height="800" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
        <h1>Selamat Datang</h1>
        <h4>Di Web informasi Masjid Nurul Hayat</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide/slide4.jpg" witdh="300" height="800" class="d-block w-100" >
      <div class="col-9 carousel-caption d-none d-md-block position-absolute top-50 start-50 translate-middle">
        <h1>Sekilas Interior Masjid</h1>
        <h4>Masjid merupakan tempat beribadah masyarakat muslim, untuk menambah kenyamanan dalam beribadah tidak jarang pengelola masjid membuat desain yang menenangkan,minimalis,segar,sederhana namun sangat efektif untuk berbagai keperluan dan kegiatan.</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- corosuel -->

<!-- sejarah -->
<section class="container mt-5">
  <div class="row">
  <div class="col">
      <img src="img/renovasi/msjid2.jpg" class="rounded" width="470" height="580">
    </div>
  <div class="col">
      <h3 class="mb-3">Kunjungan Bobby Nasution Walikota Medan
        Di Masjid Nurul Hayat</h2>
      <p>Seperti yang dilakukan Wali Kota Medan Bobby Nasution saat melakukan Safari Ramadhan di Masjid Nurul Hayat yang terletak dijalan Bunga Ncole XX, Kel. Kemenangan Tani, Kec. Medan Tuntungan, Senin (3/4/2023).</p>
      <p>Turut hadir dalam Safari Ramadhan mendampingi Wali Kota Medan Bobby Nasution, Kapolrestabes Medan Kombes Pol Valentino Alfa Tatareda, Dandim 0201/Medan Kolonel Inf Ferry Muzawwad, Kepala Kejaksaan Negeri Medan Wahyu Sabrudin, Para Pimpinan OPD dan Plt. Camat Medan Tuntungan Hendra Arjudanto S.IP, M.Si serta Lurah se-Kecamatan Medan Tuntungan. Kehadiran Wali Kota Medan Bobby Nasution disambut hangat oleh Ketua BKM Masjid Nurul Hayat beserta ratusan masyarakat Medan Tuntungan.</p>
      <p>Seperti biasanya dalam safari Ramadhan ini Pemko Medan menyerahkan hibah untuk pembangunan Masjid sebesar Rp 50 juta. Selanjutnya ada lagi bantuan satu set perlengkapan Tenis Meja, lalu bantuan buku-buku dan rak buku, penyerahan bantuan paket sembako dengan total Rp 10 juta. Selain itu, Wali Kota Medan Bobby Nasution juga menyerahkan sertifikat pendirian koperasi Masjid dan bantuan satu unit gerobak kayu dan dua unit gerobak usaha, serta KTP dan KIA yang sudah selesai pengurusanya dan penyerahan bantuan santunan kepada anak yatim piatu se-Kecamatan Medan Tuntungan yang diserahkan langsung oleh Wali Kota Medan Bobby Nasution.</p>
      <p>Wali Kota Medan juga mengatakan Pemko Medan mengadakan mudik bersama. Adapun pendaftaran dibuka mulai tanggal 3 – 6 April 2023.</p>
</script>
    </div>
  </div>
</section>
<!-- sejarah -->

<!-- sarana -->
<section id="pengumuman" class="bg-primary">
<div class="container mt-5">
  <div class="row py-4">
    <div class="col-md-6">
    <h4 class="text-white fw-bold">Sarana</h4>
      <!-- casosul -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">

  <?php 
  $i = 0;

  include "config/koneksi.php";
  $query = $conn->query("SELECT * FROM sarana");

while($data = mysqli_fetch_assoc($query)) {
 
   $active = ($i == 0) ? 'active' : '';
  ?>

    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" class="<?= $active; ?>"></button>

<?php 
 $i++; 
  }
 ?>

  </div>
  <div class="carousel-inner">

    <?php 
    include "config/koneksi.php";
    $query1 = $conn->query("SELECT * FROM sarana ORDER BY id_sapra DESC");
    $i = 0;
    while ($data1 = mysqli_fetch_assoc($query1)) { 
      $active = ($i == 0) ? 'active' : '';
      ?>
    <div class="carousel-item <?php echo $active; ?>">
      <img src="img/sarana/<?= $data1['foto']; ?>" class="d-block w-100" height="400">
    </div>
    
    <?php 
    $i++;
    }
     ?>

    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
 
</div>
      <!-- casosul -->
  </div>
  <div class="col-md-6">
</div>
</section>
<!-- sarana -->

