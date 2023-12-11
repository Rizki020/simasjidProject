<?php 
include "koneksi.php";
if($_GET['page'] == '') {
    include "home.php";
}else if($_GET['page'] == 'kajian') {
    include "page/kajian/kajian.php";
}else if($_GET['page'] == 'tambahK') {
    include "page/kajian/tambahK.php";
}else if($_GET['page'] == 'editK') {
    include "page/kajian/editK.php";
}else if($_GET['page'] == 'hapusK') {
    include "page/kajian/hapusK.php";
}//sarana prasarana
else if($_GET['page'] == 'sarana') {
    include "page/sarana/sarana.php";
}else if($_GET['page'] == 'tambahS') {
    include "page/sarana/tambahS.php";
}else if($_GET['page'] == 'editS') {
    include "page/sarana/editS.php";
}else if($_GET['page'] == 'hapusS') {
    include "page/sarana/hapusS.php";
}//pengumuman
else if($_GET['page'] == 'kegiatan') {
    include "page/pengumuman/pengumuman.php";
}else if($_GET['page'] == 'tambahP') {
    include "page/pengumuman/tambahP.php";
}else if($_GET['page'] == 'editP') {
    include "page/pengumuman/editP.php";
}else if($_GET['page'] == 'hapusP') {
    include "page/pengumuman/hapusP.php";
}//kas masuk
else if($_GET['page'] == 'masuk') {
    include "page/masuk/masuk.php";
}else if($_GET['page'] == 'tambahM') {
    include "page/masuk/tambahM.php";
}else if($_GET['page'] == 'editM') {
    include "page/masuk/editM.php";
}else if($_GET['page'] == 'hapusM') {
    include "page/masuk/hapusM.php";
}else if($_GET['page'] == 'rekapitulasi') {
    include "page/masuk/kas.php";
}//kas keluar
else if($_GET['page'] == 'keluar') {
    include "page/keluar/keluar.php";
}else if($_GET['page'] == 'tambahKa') {
    include "page/keluar/tambahKa.php";
}else if($_GET['page'] == 'editKa') {
    include "page/keluar/editKa.php";
}else if($_GET['page'] == 'hapusKa') {
    include "page/keluar/hapusKa.php";
// }jadwal harian
}
else if($_GET['page'] == 'jadwal') {
    include "page/jadwal/jadwal.php";
} else if($_GET['page'] == 'hapusJ') {
    include "page/jadwal/hapusJ.php";
}
// }user
else if($_GET['page'] == 'user') {
    include "page/user/user.php";
} 
else if($_GET['page'] == 'tambahU') {
    include "page/user/tambahU.php";
}
else if($_GET['page'] == 'editU') {
    include "page/user/editU.php";
}
else if($_GET['page'] == 'hapusU') {
    include "page/user/hapusU.php";
}