<?php

include("koneksi.php");

if( isset($_GET['id_berita']) ){

    // ambil id dari query string
    $id = $_GET['id_berita'];

    // buat query hapus
    $sql = "DELETE FROM berita WHERE id_berita=$id_berita";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: listberita.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>