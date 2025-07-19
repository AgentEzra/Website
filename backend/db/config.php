<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "ezradb";

// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// if ($conn->connect_error) {
//     die("Connection failed: " . mysqli_conne_error());
// } else {
//     echo "Koneksi Berhasil";
// }
?>
