<?php

$serverName = "localhost";
$UserName = "root";
$Password = "";
$dbName = "test";
// connectind to database
$con=mysqli_connect( $serverName,$UserName,$Password,$dbName);


//getting values from the form
if(isset($_POST['Submit'])){
    $name = $_POST ['FName'];
    $password = $_POST['Password'];

    //quuery the database for users

    $king= "select * from user where FName='".$name."'  AND Password='".  $password."'limit 1";

    $result = mysqli_query($con,$king);

    if(mysqli_num_rows($result)==1){

        $_SESSION['FName']=$name;
        header("Location:Admin.php");

    }
    else {
        $failed = "you have entered incorrect information";


    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Sstyle.css">
  </head>
  <body>
    <div class="login-box">
        <h1>Login</h1>
            <form method="POST" action="#">
        <div class="textbox">
            <i class="fas fa-user" aria-hidden="true" ></i>
            <input type="text" placeholder="First Name" name="FName" id="FName" required >
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="Password" placeholder="Password" name="Password" id="Password" required>
        </div>
    <input class="btn" type="submit"  name="Submit" value="Submit">
    </form>
  </body>
</html>
