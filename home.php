<?php
$serverName = "localhost";
$UserName = "root";
$Password = "";
$dbName = "test";

$con=mysqli_connect( $serverName,$UserName,$Password,$dbName);

$sql = "select * from tbl_item";
$result = mysqli_query($con,$sql);
?>
<html>
<head>
<title></title>
</head>
<body>
<h1> Welcome to King clothing </h1>

<?php 
while($rows = mysqli_fetch_assoc(mysqli_result($result)){

    echo $rows.['name'];
}
?>

</body>

</html>