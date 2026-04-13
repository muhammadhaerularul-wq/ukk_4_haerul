<?php
require_once "m_koneksi.php";
class Buku{
function all(){global $conn; return mysqli_query($conn,"SELECT * FROM data_buku");}
function tambah($d){global $conn; mysqli_query($conn,"INSERT INTO data_buku VALUES(NULL,'$d[judul]','$d[pengarang]','$d[penerbit]','$d[tahun]','$d[stok]')");}
function hapus($id){global $conn; mysqli_query($conn,"DELETE FROM data_buku WHERE id_buku=$id");}
}?>