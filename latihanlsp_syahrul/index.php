<!DOCTYPE html>
<html>

<head>
    <title>SOURCECODE</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
    <div class="container col-md-8 mt-6">
        <h1>TABEL SOURCECODE</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
                DATA SISWA <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>nis</th>
                            <th>nama</th>
                            <th>kelas</th>
                            <th>jurusan</th>
                            <th>alamat</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php'); //memanggil file koneksi
                        $datas = mysqli_query($koneksi, "SELECT * FROM datasiswa") or die(mysqli_error($koneksi));
                        //script untuk menampilkan data barang

                        $no = 1; //untuk pengurutan nomor

                        //melakukan perulangan
                        while ($row = mysqli_fetch_assoc($datas)) {
                        ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['nis']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['kelas']; ?></td>
                                <td><?= $row['jurusan']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                                </td>
                            </tr>

                        <?php $no++;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>