<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Berita</title>
</head>

<body>
    <header>
        <h3>Berita yang sudah diunggah</h3>
    </header>

    <nav>
        <a href="form-berita.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Isi</th>
            <th>Gambar</th>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM berita";
        $query = mysqli_query($db, $sql);

        while($artikel = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$artikel['id_berita']."</td>";
            echo "<td>".$artikel['judul']."</td>";
            echo "<td>".$artikel['tanggal']."</td>";
            echo "<td>".$artikel['isi']."</td>";
            echo "<td>".$artikel['gambar']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$artikel['id_berita']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$artikel['id_berita']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>