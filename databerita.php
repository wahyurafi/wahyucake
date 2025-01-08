<h2>Data Berita</h2>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kateogri</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $ber = $berita->tampil_berita();
        foreach($ber as $pecah)
        {
            ?>
        <tr>
            <td>1</td>
            <td>nama kategori</td>
            <td>ini judul</td>
            <td>2024-11-20</td>
            <td>
                <a class="btn btn-info" href=""><i class="fa fa-edit"></i> ubah</a>
                <a class="btn btn-danger" href=""><i class="fa fa-remove"></i> hapus</a>
            </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
</table>