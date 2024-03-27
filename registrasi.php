<?php

require 'functions.php';

if(isset($_POST["registrasi"])) {

    if(registrasi ($_POST) > 0 ){
        echo 
        "<script>
            alert('data berhasil ditambahkan');
        </script>";
    }else{
        echo mysqli_error($conn);
    }

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="" method="post">
        <h1>Registrasi</h1>
        <ul>
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="pasword">Pasword : </label>
                <input type="password" name="pasword" id="pasword">
            </li>
            
            <li>
                <label for="pasword2">konfirmasi Pasword : </label>
                <input type="password" name="pasword2" id="pasword2">
            </li>
            <li>
                <button type="submit" name="registrasi">registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>