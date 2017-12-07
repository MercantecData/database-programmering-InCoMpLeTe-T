<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databaseloginsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, ID, status, name FROM users ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>ID</th><th>Status</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["ID"]."<td>".$row["status"]."<td>".$row["name"]." </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>