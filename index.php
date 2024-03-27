<?php 

//menghubungkan ke file functions
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari ditekan

if(isset($_POST["search"])){
    $mahasiswa = search($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<head>
    <title>halaman utama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DAFTAR MAHASISWA </h1>
    <a href="insert.php" class="button">Tambah Data</a><br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="input keyword search" autocomplete="off">
        <button type="submit" name="search">search</button>
    </form> <br> 
<tr>
    <table border  = "1" cellpadding="10" cellspacing="0">
    </tr>   
    
        <tr>
            <th>NO.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>pasword</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1?>
        <?php foreach ($mahasiswa as $row) { ?>
        <tr>
            <td><?php echo $i; ?></td> <?php $i++?>
            <td><?php echo $row["nim"] ?> </td>
            <td><?php echo $row["nama"] ?> </td>
            <td><?php echo $row["jurusan"] ?> </td>
            <td><?php echo $row["alamat"] ?> </td>
            <td><?php echo $row["pasword"] ?> </td>
            <td>
                <a href="update.php?id= <?php echo $row["id"]; ?>">Update</a> |
                <a href="delete.php?id=<?php echo $row["id"] ?>" onclick="return confirm('yakin ingin menghapus');">delete</a>
            </td>
            <?php  } ;?>
        </tr>
    </table>
</body>
</html>