
<?php
//create connection
$connect=mysqli_connect('localhost','root','','databaseloginsystem');
 
//check connection
if(mysqli_connect_errno($connect))
{
	echo 'failed to connect!';
}
?>