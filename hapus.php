<?php
    include("config.php");
    if( isset($_GET['id']) ){
        // ambil id dari query string
        $id = $_GET['id'];

        // buat query hapus
        $query = pg_query("DELETE FROM calonsiswa WHERE id=$id");

        // apakah quey berhasil?

        if( $query ){
            header('Location: daftarsiswa.php');
        } else {
            die("Gagal menghapus..");
        }
    } else {
        die("Akses dilarang...");
} ?>