<!DOCTYPE html>
<html>

<head>
    <title>SOURCECODE</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
    <div class="container col-md-6 mt-4">
        <h1>Table Isi</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
                Edit Isi
            </div>
            <div class="card-body">
                <?php
                include('koneksi.php');

                $id = $_GET['id']; //mengambil id barang yang ingin diubah

                //menampilkan barang berdasarkan id
                $data = mysqli_query($koneksi, "SELECT * FROM datasiswa WHERE id = $id");
                $row = mysqli_fetch_assoc($data);

                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nis">nis</label>
                        <!--  menampilkan nama barang -->
                        <input type="text" id="nis" name="nis" required="" class="form-control" value="<?= $row['nis']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama">name</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $row['nama']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="kelas">kelas</label>
                        <select name="kelas" id="kelas">
                            <option value="X" <?php if( $row['kelas'] == 'X' ) { echo "selected"; } ?>>X</option>
                            <option value="XI" <?php if( $row['kelas'] == 'XI' ) { echo "selected"; } ?>>XI</option>
                            <option value="XII" <?php if( $row['kelas'] == 'XII' ) { echo "selected"; } ?>>XII</option>>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">jurusan</label>
                        <select name="jurusan" id="jurusan">
                            <option value="RPL" <?php if( $row['jurusan'] == 'RPL' ) { echo "selected"; } ?>>RPL</option>
                            <option value="MM" <?php if( $row['jurusan'] == 'MM' ) { echo "selected"; } ?>>MM</option>
                            <option value="TKJ" <?php if( $row['jurusan'] == 'TKJ' ) { echo "selected"; } ?>>TKJ</option>>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"><?= $row['alamat']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $nis = htmlspecialchars($_POST['nis']);
                    $nama = htmlspecialchars($_POST['nama']);
                    $kelas = htmlspecialchars($_POST['kelas']);
                    $jurusan = htmlspecialchars($_POST['jurusan']);
                    $alamat = htmlspecialchars($_POST['alamat']);

                    mysqli_query($koneksi, "UPDATE datasiswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan', alamat='$alamat'  WHERE id = $id") or die(mysqli_error($koneksi));
            
                    echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
                }



                ?>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>