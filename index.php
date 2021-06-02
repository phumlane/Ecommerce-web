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
    $surname=$_POST['LName'];
    $email=$_POST['Email'];
    $password = $_POST['Password'];

    //quuery the database for users

    $king= "select * from user where FName='".$name."'  AND  LName='".  $surname."'
    AND Email='".  $email."' AND Password='".  $password."'limit 1";

    $result = mysqli_query($con,$king);

    if(mysqli_num_rows($result)==1){

        $_SESSION['FName']=$name;
        header("Location:OutPut.php");

    }
    else {
        $failed = "you have entered incorrect information";


    }
}

//registering a new user
$message = "";
if(isset($_POST["Register"])){
    if(!empty($_POST["user"])){


        $sql = "INSERT INTO user ('FName') SELECT '".$_POST[FName]."' FROM user
        WHERE NOT EXISTS (SELECT FName FROM user WHERE FName = '".$_POST["user"]."')" ;
        if (mysqli_query($con,$sql)){
            $insert_id = mysqli_insert_id($con);
            if($insert_id!= ""){
                header("location:index.php?inserted=1");
            }
            else {
                header("location:index.php?already=1");
            }
        }
    }
    else {
        header("location:index.php?required=1");

    }
}
if(isset($_GET["inserted"])){
    $message = "user inserted";
}
if(isset($_GET["already"])){
    $message = "user already inserted";
}



?>

<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="Sstyle.css">
    <link rel="stylesheet" href="Style.css">
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
            <i class="fas fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Last Name"  name="LName" id="LName" required >
        </div>

        <div class="textbox">
            <i class="far fa-envelope" aria-hidden="true"></i>
            <input type="text" placeholder="Email" name="Email" id="Email" required>
        </div>

        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="Password" placeholder="Password" name="Password" id="Password" required>
        </div>
    <input class="btn" type="submit"  name="Submit" value="Submit">
    <input class="btn" type="submit"  name="Register" value="Register">
    <a href="AdminLogin.php" class="btns">Admin</a>

  <?php
    if (!empty("Email")) {
      ?>
      <span><?php  $failed; ?></span>
      <?php
    }
   ?>



</form>
</div>
</body>
</html>
