<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_berita']) ){
    header('Location: listberita.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM berita WHERE id_berita=$id_berita";
$query = mysqli_query($db, $sql);
$artikel = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Berita</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Berita</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id_berita" value="<?php echo $artikel['id_berita'] ?>" />

        <p>
            <label for="judul">Judul: </label>
            <input type="text" name="judul" placeholder="isi judul menarik" value="<?php echo $artikel['judul'] ?>" />
        </p>
        <p>
            <label for="tanggal">Tanggal: </label>
            <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required>
        </p>
        <p>
            <label for="isi">Isi: </label>
            <textarea name="isi"><?php echo $data['isi']; ?></textarea>
        </p>
        <p>
            <label for="gambar">Gambar: </label>
            <input type="file" name="gambar" accept="image/*">
            <img src="<?php echo $data['gambar']; ?>" alt="Gambar Berita" width="100" height="100">
        </p>
        <p>
            <button type="submit"name="Ubah">Simpan Perubahan</button>
        </p>

        </fieldset>


    </form>

    </body>
</html>