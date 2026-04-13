<?php
require_once "m_koneksi.php";

class Pinjam{

    function pinjam($d){
        global $conn;

        mysqli_query($conn,"INSERT INTO peminjaman 
            VALUES(NULL,
            '$d[id_user]',
            '$d[id_buku]',
            NOW(),
            DATE_ADD(NOW(), INTERVAL 7 DAY),
            NULL,
            'dipinjam')");

        mysqli_query($conn,"UPDATE data_buku 
            SET stok = stok - 1 
            WHERE id_buku = '$d[id_buku]'");
    }

    function kembali($id){
        global $conn;

        // ambil id buku
        $data = mysqli_fetch_assoc(mysqli_query($conn,
            "SELECT id_buku FROM peminjaman WHERE id_peminjaman=$id"
        ));

        // update status
        mysqli_query($conn,"UPDATE peminjaman 
            SET status='dikembalikan', tanggal_kembali=NOW() 
            WHERE id_peminjaman=$id");

        // kembalikan stok
        mysqli_query($conn,"UPDATE data_buku 
            SET stok = stok + 1 
            WHERE id_buku='".$data['id_buku']."'");
    }

    function all(){
        global $conn;

        $q = "SELECT p.*, u.nama, b.judul 
              FROM peminjaman p
              JOIN users u ON p.id_user = u.id_user
              JOIN data_buku b ON p.id_buku = b.id_buku";

        return mysqli_query($conn, $q);
    }
}
?>