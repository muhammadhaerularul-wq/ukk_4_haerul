<?php
require_once "../models/m_pinjam.php";
$p=new Pinjam();
if($_GET['aksi']=='pinjam'){ $p->pinjam($_POST); header("Location:../views/user/index.php");}
if($_GET['aksi']=='kembali'){ $p->kembali($_GET['id']); header("Location:../views/admin/peminjaman.php");}
?>