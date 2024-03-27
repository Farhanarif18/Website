<?php

require 'functions.php';

//ambil data dari url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs["nim"]);

//cek apakah tombol submit sudah ditekan atau belum
if( isset ($_POST["submit"])){

    //cek apakah data berhasil diubah atau belum
    if(update($_POST) > 0){
        echo "<script>alert('data berhasil diubah');</script>";
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "<script>alert('data gagal diubah');</script>";
        echo "<script>window.location='index.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>update data mahasiswa</title>
</head>
<body>
    <h2>UPDATE DATA MAHASISWA</h2>

    <form action="" method="post" >
        <ul>
            <li>
                <input type="hidden" name="id" value="<?php echo $mhs["id"];?>">
            </li>
            <li>
                <label for="nim"> nim : </label>
                <input type="text" name="nim" id="nim" required value="<?php echo $mhs["nim"];?>">
            </li>
            <li>
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?php echo $mhs["nama"];?>">
            </li>
            <li>
                <label for="jurusan"> Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?php echo $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="alamat"> Alamat : </label>
                <input type="text" name="alamat" id="alamat"required value="<?php echo $mhs["alamat"];?>">
            </li>
            <li>
                <label for="pasword"> Pasword : </label>
                <input type="text" name="pasword" id="pasword" rrequired value="<?php echo $mhs["pasword"];?>">
            </li>
            <li>
                <button type="submit" name="submit"> Update </button>
            </li>
        </ul>
    </form>
    <a href="index.php" class="button">Kembali halaman utama</a>

</body>
</html>