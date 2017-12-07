<?php include 'database.php'?>


<?php

$status=$_POST['status'];
$klokken_er=$_POST['klokken'];
$name_er=$_POST['name'];


mysqli_query($connect,"insert into test(status,klokken,name) values('$status', '$klokken_er', '$name')");
?>

