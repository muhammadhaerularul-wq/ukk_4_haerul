<?php 
require_once "../../models/m_pinjam.php"; 
$p = new Pinjam(); 
$d = $p->all(); 
?>

<html>
<head>
    <title>Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h2 class="mb-4">Data Peminjaman</h2>

<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark text-center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama User</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Jatuh Tempo</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
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
            <td><?= $r['id_peminjaman'] ?></td>
            <td><?= $r['nama'] ?></td>
            <td class="text-start"><?= $r['judul'] ?></td>
            <td><?= $r['tanggal_pinjam'] ?></td>
            <td><?= $r['tanggal_jatuh_tempo'] ?? '-' ?></td>
            <td><?= $r['tanggal_kembali'] ?? '-' ?></td>
            <td>
                <?php if($r['status'] == 'dipinjam'){ ?>
                    <span class="badge bg-warning text-dark">Dipinjam</span>
                <?php } else { ?>
                    <span class="badge bg-success">Dikembalikan</span>
                <?php } ?>
            </td>
            <td>
                <?php if($r['status'] == 'dipinjam'){ ?>
                    <a href="../../controllers/c_pinjam.php?aksi=kembali&id=<?= $r['id_peminjaman'] ?>" 
                       class="btn btn-sm btn-primary"
                       onclick="return confirm('Yakin mau kembalikan buku ini?')">
                       Kembali
                    </a>
                <?php } else { ?>
                    <span class="text-muted">-</span>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</body>
</html>