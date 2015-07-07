<?php


    include 'page/login.php'; // Includes Login Script
    include 'page/DB.php';

    if(isset($_SESSION['login_user']) && ($_SESSION['unique']=='1')){
    header("location: page/staff.php");
    }elseif(isset($_SESSION['login_user']) && ($_SESSION['unique']=='2')){
        header("location: page/management.php");
    }
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Login Page</title>
    
    
        <link rel="stylesheet" href="css/style.css">


  </head>

  <body>



    <div class="wrapper">
    <div class="container">
        <h1>Employee Leave Management System</h1>
        
        <form class="form" action="" method="post">
            <input type="text" name="username" placeholder="Username" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <button type="submit" name="submit" id="login-button">Login</button>
        </form>
    </div>
    
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    
    
    
  </body>
</html>
