<?php session_start(); ?>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <h2 class="mb-4">Dashboard Admin</h2>

    <!-- NAVBAR MINI -->
    <div class="mb-4">
        <a href="buku.php" class="btn btn-primary btn-sm">Buku</a>
        <a href="peminjaman.php" class="btn btn-warning btn-sm">Peminjaman</a>
        <a href="../../controllers/c_auth.php?aksi=logout" class="btn btn-danger btn-sm">Logout</a>
    </div>

    <!-- CARD MENU -->
    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h5>Manajemen Buku</h5>
                <p class="text-muted">Tambah, lihat, dan hapus data buku</p>
                <a href="buku.php" class="btn btn-primary">Masuk</a>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h5>Data Peminjaman</h5>
                <p class="text-muted">Kelola peminjaman & pengembalian</p>
                <a href="peminjaman.php" class="btn btn-warning">Masuk</a>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3 text-center">
                <h5>Keluar</h5>
                <p class="text-muted">Logout dari sistem</p>
                <a href="../../controllers/c_auth.php?aksi=logout" class="btn btn-danger">Logout</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>