<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "¨stock_smart";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn){
        die ("connection failed" . mysqli_error());
    }
    
    
?>