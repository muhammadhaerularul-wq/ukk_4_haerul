<?php 
session_start(); 
require_once "../../models/m_buku.php"; 
$b = new Buku(); 
$d = $b->all(); 
?>

<html>
<head>
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Buku</h2>
    <a href="../../controllers/c_auth.php?aksi=logout" class="btn btn-danger btn-sm">Logout</a>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark text-center">
        <tr>
            <th>No</th>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    <?php 
    $no = 1;
    while($r = mysqli_fetch_assoc($d)){ 
    ?>
        <tr class="text-center">
            <td><?= $no++ ?></td>
            <td><?= $r['id_buku'] ?></td>
            <td class="text-start"><?= $r['judul'] ?></td>
            <td>
                <form method="POST" action="../../controllers/c_pinjam.php?aksi=pinjam">
                    <input type="hidden" name="id_buku" value="<?= $r['id_buku'] ?>">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['user']['id_user'] ?>">
                    <button class="btn btn-primary btn-sm">Pinjam</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</body>
</html>