<?php
    include_once 'includes/DBconn.php';

 ?>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $sql = "SELECT * from tbl_user;";
    $results = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rowa($results);

    if ($resultsCheck > 0) {
      while ($row = mysqli_fetch_assoc($results)) {
        echo $row[tbl_user_id];
      }
    }

 ?>

</body>
</html>
