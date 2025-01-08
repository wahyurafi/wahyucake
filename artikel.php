<div class="container">
    <div class="row">
    <?php
    include("koneksi.php");
    $sql = "SELECT * FROM berita";
    $hasil = mysqli_query($db, $sql);

    $jmlArtikel = mysqli_num_rows($hasil);
    if ($jmlArtikel > 0) {
        while ($artikel = mysqli_fetch_array($hasil)) {
            ?>
            <div class="col-sm-4">
                <h3> <?= $row["judul"];//echo $row["judul"] ?></h3>
                <p> 
                    <?= $row["tanggal"];?>
                </p>
                <p> 
                    <?= $row["gambar"];?>
                </p>
                <p> 
                    <?= $row["isi"];?>
                </p>
            </div>
        <?php
        }
        }
        ?>
    </div>
</div>

