<?php

    session_start();
$serverName = "localhost";
$UserName = "root";
$Password = "";
$dbName = "test";

$con=mysqli_connect( $serverName,$UserName,$Password,$dbName);


    if(isset($_SESSION["name"])==true){

        echo "Welcom"." ".$_SESSION["FName"];
    }

?>
<html>
<head>
<title> Confirmation</title>
<link rel="stylesheet" href="Sstyle.css">
</head>
<body>


<?php


?>

<p class="para"> press the button "continue " to continue and "logout" to end the session </p>
<div>
<a href= "myShop.php"   class="btns">Continue</a>
<a href="logout.php"  class="btns"> Logout</a>
</div>
</body>
</html>
