<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Ubah'])){

    // ambil data dari formulir
    $id_berita = $_POST['id_berita'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];
    $gambar = $_POST['gambar'];

    // buat query update
    $sql = "UPDATE berita SET id_berita='$id_berita', judul='$judul', tanggal='$tanggal', isi='$isi', gambar='$gambar' WHERE id_berita=$id_berita";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: listberita.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>