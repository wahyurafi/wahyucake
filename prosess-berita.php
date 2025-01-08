<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Submit'])){

    // mengambil data dari formulir
    $id_berita = $_POST['id_berita'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];
    $gambar = $_POST['gambar'];

    // membuat query
    $sql = "INSERT INTO berita (id_berita,judul, tanggal, isi, gambar) VALUE ('$id_berita','$judul', '$tanggal', '$isi', '$gambar')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>