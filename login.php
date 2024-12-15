<?php
include "config/koneksi.php";
session_start();

// Jika sudah login, arahkan ke dashboard masing-masing
if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] === 'admin') {
        header('Location: dashboard1.php'); // Dashboard admin
    } else {
        header('Location: dashboardU.php'); // Dashboard user
    }
    exit;
}

// Proses login
if (isset($_POST['login'])) {
    $user = htmlspecialchars($_POST['user']);
    $pass = htmlspecialchars($_POST['pass']);

    // Login sebagai admin
    $queryAdmin = $conn->query("SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
    if ($queryAdmin->num_rows > 0) {
        $rowAdmin = mysqli_fetch_assoc($queryAdmin);
        $_SESSION['username'] = $rowAdmin['username'];
        $_SESSION['foto'] = $rowAdmin['foto'];
        $_SESSION['role'] = 'admin'; // Tetap admin
        header('Location: dashboard1.php'); // Arahkan ke dashboard admin
        exit;
    }

    // Login sebagai user
    $queryUser = $conn->query("SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
    if ($queryUser->num_rows > 0) {
        $rowUser = mysqli_fetch_assoc($queryUser);
        $_SESSION['username'] = $rowUser['username'];
        $_SESSION['foto'] = $rowUser['foto'];
        $_SESSION['role'] = $rowUser['role']; // Role dari tabel user
        header('Location: dashboardU.php'); // Arahkan ke dashboard user
        exit;
    }

    // Jika gagal login
    echo "<script>alert('Username atau Password Anda Salah. Silahkan Coba Lagi!');</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="boostrap/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="boostrap/css/style.css">
    <title>Halaman Login</title>
    <link rel="icon" type="image/png" href="img/sosial/logomasjid3.png">
</head>

<body>

    <!-- login -->
    <section class="vh-100 bg-success">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="img/login2.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem; height: 630px;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="" method="POST">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <a class="navbar-brand" href="#">
                                                <img src="img/logomasjidlogin.png" width="150" height="100">
                                            </a>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Silahkan Login</h5>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="Username" class="form-control form-control-lg"
                                                placeholder="Username" autofocus required name="user" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control form-control-lg"
                                                placeholder="Password" name="pass" required />
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit"
                                                name="login">Login</button>
                                            <a href="index.php" class="btn btn-success btn-lg btn-block">Batal</a>
                                        </div>
                                        <h7 style="color: red;">Login hanya diperuntukkan untuk pengurus/Admin</h7>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login -->

    <script src="boostrap/umd/popper.min.js"></script>
    <script src="boostrap/js/bootstrap.min.js"></script>
</body>

</html>
