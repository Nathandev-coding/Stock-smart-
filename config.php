<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateur";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die ("connection failed" . mysqli_error());
}

?>