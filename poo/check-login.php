<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname ="founder";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

/**
 * remplissage de donnés
 */
$sql = "Select Username,Password from user";
$result =mysqli_connect($conn,$sql);





?>