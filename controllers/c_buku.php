<?php
require_once "../models/m_buku.php";
$b=new Buku();
if($_GET['aksi']=='tambah'){ $b->tambah($_POST); }
if($_GET['aksi']=='hapus'){ $b->hapus($_GET['id']); }
header("Location:../views/admin/buku.php");
?>