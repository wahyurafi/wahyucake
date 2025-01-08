<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>

<body>
    <header>
        <h3>Selamat Datang, Wahyu</h3>
        <h1>Berita-berita</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-berita.php">Berita Baru</a></li>
            <li><a href="listberita.php">List Berita</a></li>
        </ul>
    </nav>

    </body>
    <a href="login.php">BACK</a>
</html>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Penambahan Berita baru berhasil!";
            } else {
                echo "Penambahan Berita baru gagal!";
            }
        ?>
    </p>
<?php endif; ?>
