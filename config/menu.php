<!-- active link -->
<?php
session_start();

$page = $_GET['page'];

// definisi link
if ($page == 'kajian') {
  $master1 = "menu-open";
  $master2 = "active";
  $kajian = "active";
}
if ($page == 'sarana') {
  $master1 = "menu-open";
  $master2 = "active";
  $sarana = "active";
}
if ($page == 'kegiatan') {
  $master1 = "menu-open";
  $master2 = "active";
  $kegiatan = "active";
}
if ($page == 'jadwal') {
  $master1 = "menu-open";
  $master2 = "active";
  $jadwal = "active";
}
if ($page == 'masuk') {
  $master1 = "menu-open";
  $master2 = "active";
  $masuk = "active";
}
if ($page == 'keluar') {
  $master1 = "menu-open";
  $master2 = "active";
  $keluar = "active";
}
if ($page == 'user') {
  $master1 = "menu-open";
  $master2 = "active";
  $user = "active";
}
?>

<aside class="main-sidebar sidebar-light-success elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link  text-center">
    <span class="brand-text font-weight-light text-success font-weight-bold">Nurul Hayat</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <style>
        .image img {
          object-fit: cover;
          border-radius: 50%;
        }
      </style>
      </head>
      <script>
  function confirmLogout(event) {
    event.preventDefault();
    const confirmLogout = confirm("Anda yakin ingin keluar dari akun ini?");
    if (confirmLogout) {
      window.location.href = "logout.php";
    }
  }
</script>
      <body>

        <div class="image">
          <img src="img/<?= $_SESSION['foto']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?= $_SESSION['username']; ?>
          </a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="dashboard1.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=kajian" class="nav-link <?= $kajian; ?>">
            <i class="nav-icon fas fa-mosque"></i>
            <p>
              Kajian
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=sarana" class="nav-link <?= $sarana; ?>">
            <i class="nav-icon fas fa-stream"></i>
            <p>
              Sarana & Prasarana
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=kegiatan" class="nav-link <?= $kegiatan; ?>">
            <i class="nav-icon fas fa-bullhorn"></i>
            <p>
              Kegiatan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=keluar" class="nav-link  <?= $keluar; ?>">
            <i class="nav-icon fas fa-money-check-alt"></i>
            <p>
              Kas Keluar
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=masuk" class="nav-link  <?= $masuk; ?>">
            <i class="nav-icon fas fa-money-check-alt"></i>
            <p>
              Kas Masuk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=jadwal" class="nav-link  <?= $jadwal ?>">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Jadwal Kajian
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?page=user" class="nav-link  <?= $user; ?>">
            <i class="nav-icon fas fa-user-lock"></i>
            <p>
              Jamaah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" onclick="confirmLogout(event)">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>