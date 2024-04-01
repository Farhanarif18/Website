<?php


require 'functions.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username  =  '$username'" );

    if(mysqli_num_rows($result) === 1) {
        
        //cek pasword

        $row = mysqli_fetch_assoc($result);
        // var_dump(password_verify($password, $row['password']));
        if (password_verify($password, $row['password'])) {  

            header("Location: index.php");
            exit;
        }   


    }
    $error = true;


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar method</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- < class="containner"> -->
        <h1> Halaman Login</h1>
        <?php if(isset($error)) {?>
            <p style="color : red; font-style : italic;">Username atau Password salah</p>
        

        <?php }?>


        <!-- <div class="imgcenter"><img src="logoIG.png" alt="" width=50px></div> -->
        <form action="" method="post">
        <ul>
            <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username"> <br><br>
        </li>
        <li>
            <label for="password" >Password :</label>
            <input type="password" name="password" id="password"> <br><br>
        </li>
        <button type="submit" name="login">Login</button>
        </ul>
        </form>
    </div>
</body>
</html> 