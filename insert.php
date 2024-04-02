<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}

require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if( isset ($_POST["submit"])){

    if(insert($_POST) > 0){
        echo "<script>alert('data berhasil ditambahkan');</script>";
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "<script>alert('data gagal ditambahkan');</script>";
        echo "<script>window.location='index.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert data mahasiswa</title>
</head>
<body>
    <h2>TAMBAH DATA MAHASISWA</h2>

    <form action="" method="post" >
        <ul>
            <li>
                <label for="nim"> nim : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jurusan"> Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="alamat"> Alamat : </label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <button type="submit" name="submit"> Tambah</button>
            </li>
        </ul>
    </form>
    <a href="index.php" class="button">Kembali halaman utama</a>

</body>
</html>