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
                <label for="username">usernamee : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            
            <li>
                <label for="password2">konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="registrasi">registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>