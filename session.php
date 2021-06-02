<?php 

$serverName = "localhost";
$UserName = "root";
$Password = "";
$dbName = "test";
// connectind to database
$con=mysqli_connect( $serverName,$UserName,$Password,$dbName);


session_start();//starting session

$user_check= $_SESSION['login'];


$ses_sql=mysqli_query($con,"select * from test where FName ='$user_check'");
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['FName'];

if(!isset($login_session)){
    mysql_close($con);//closing connection
    header('Location : OutPut.php');//redirecting to outputting page
}



?>