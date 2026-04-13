<?php 
require_once "../../models/m_buku.php"; 
$b = new Buku(); 
$d = $b->all(); 
?>

<html>
<head>
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h2 class="mb-3">Manajemen Buku</h2>

<!-- FORM TAMBAH -->
<div class="card p-3 mb-4 shadow-sm">
    <h5>Tambah Buku</h5>
    <form method="POST" action="../../controllers/c_buku.php?aksi=tambah">
        
        <div class="row">
            <div class="col-md-3 mb-2">
                <input class="form-control" name="judul" placeholder="Judul Buku" required>
            </div>
            <div class="col-md-2 mb-2">
                <input class="form-control" name="pengarang" placeholder="Pengarang" required>
            </div>
            <div class="col-md-2 mb-2">
                <input class="form-control" name="penerbit" placeholder="Penerbit" required>
            </div>
            <div class="col-md-2 mb-2">
                <input class="form-control" name="tahun" placeholder="Tahun" required>
            </div>
            <div class="col-md-1 mb-2">
                <input class="form-control" name="stok" placeholder="Stok" required>
            </div>
            <div class="col-md-2 mb-2">
                <button class="btn btn-success w-100">Tambah</button>
            </div>
        </div>

    </form>
</div>

<!-- TABEL -->
<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark text-center">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Stok</th>
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
            <td class="text-start"><?= $r['judul'] ?></td>
            <td><?= $r['pengarang'] ?></td>
            <td><?= $r['penerbit'] ?></td>
            <td><?= $r['tahun'] ?></td>
            <td>
                <?php if($r['stok'] > 0){ ?>
                    <span class="badge bg-success"><?= $r['stok'] ?></span>
                <?php } else { ?>
                    <span class="badge bg-danger">Habis</span>
                <?php } ?>
            </td>
            <td>
                <a href="../../controllers/c_buku.php?aksi=hapus&id=<?= $r['id_buku'] ?>" 
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin mau hapus?')">
                   Hapus
                </a>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</body>
</html>