

<!-- konten -->
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="fw-bold text-center">Jadwal Kajian Masjid Nurul Hayat</h2>
        </div>
    </div>
    <div class="col mt-4">
        <table class="table">
            <thead class="table-light">
                <th>No</th>
                <th>Jam</th>
                <th>Tanggal</th>
                <th>Penceramah</th>
                <th>Hari</th>
                <th>Tentang Kajian</th>
            </thead>

    <?php 
    include "config/koneksi.php";
     $sql = $conn->query("SELECT * FROM jadwal ORDER BY tanggal DESC");
     foreach($sql as $d):
    ?>

            <tbody>
                <td><?= ++$i; ?></td>
                <td><?= date("h:i:s A", strtotime($d['waktu'])); ?></td>
                <td><?= date("d/M/Y", strtotime($d['tanggal'])); ?></td>
                <td><?= $d['penceramah']; ?></td>
                <td><?= $d['hari']; ?></td>
                <td><?= $d['kajian']; ?></td>
            </tbody>
    <?php endforeach; ?>

        </table>
    </div>
</div>
<!-- konten -->
