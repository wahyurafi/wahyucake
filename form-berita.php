<!DOCTYPE html>
<html>
<head>
    <title>Formulir Penambahan Berita Baru</title>
</head>

<body>
    <header>
        <h3>Formulir Penambahan BeritaBaru</h3>
    </header>

    <form action="proses-berita.php" method="POST">

        <fieldset>

        <p>
            <label for="id_berita">ID: </label>
            <input type="text" name="id_berita" placeholder="tuliskan id beritamu" />
        </p>
        <p>
            <label for="judul">Judul: </label>
            <input type="text" name="judul" placeholder="isi judul menarik" />
        </p>
        <p>
            <label for="tanggal">Tanggal: </label>
            <input type="date" name="tanggal" required>
        </p>
        <p>
            <label for="isi">Isi: </label>
            <textarea name="isi"></textarea>
        </p>
        <p>
            <label for="gambar">Gambar: </label>
            <input type="file" name="gambar" accept="image/*">
        </p>
        <p>
            <input type="submit" value="Submit" name="Submit" />
        </p>

        </fieldset>

    </form>

    </body>
</html>