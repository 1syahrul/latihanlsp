<!DOCTYPE html>
<html>

<head>
    <title>SOURCECODE</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
    <div class="container col-md-6 mt-4">
        <h1>Table isi</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                Tambah isi
                <div class="card-body">
                    <form action="" method="post" role="form">
                        <div class="form-group">
                            <label>nis</label>
                            <input type="text" name="nis" required class="form-control" placeholder="masukan nis">
                        </div>
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="masukan nama">
                        </div>

                        <div class="form-group">
                        <label for="kelas">kelas</label>
                            <select name="kelas" id="kelas">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>>
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="jurusan">jurusan</label>
                            <select name="jurusan" id="jurusan">
                                <option value="RPL">RPL</option>
                                <option value="MM">MM</option>
                                <option value="TKJ">TKJ</option>>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="masukan alamat"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
                    </form>

                    <?php
                    include('koneksi.php');

                    //melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
                    if (isset($_POST['submit'])) {
                        //menampung data dari inputan
                        $nis = htmlspecialchars($_POST['nis']);
                        $nama = htmlspecialchars($_POST['nama']);
                        $kelas = htmlspecialchars($_POST['kelas']);
                        $jurusan = htmlspecialchars($_POST['jurusan']);
                        $alamat = htmlspecialchars($_POST['alamat']);

                        //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
                        $datas = mysqli_query($koneksi, "INSERT INTO datasiswa VALUES('',  '$nis', '$nama', '$kelas', '$jurusan', '$alamat')") or die(mysqli_error($koneksi));
                        //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

                        //ini untuk menampilkan alert berhasil dan redirect ke halaman index
                        echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>