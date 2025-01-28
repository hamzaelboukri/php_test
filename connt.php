<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "testphp";  

$dns="mysql:host=$servername;dbname=$dbname";
$pdo = new PDO($dns, $username, $password);
try {
    $dns="mysql:host=$servername;dbname=$dbname";
    $pdo = new PDO($dns, $username, $password);
    
}

catch(PDOException $e) {
  echo "Connection failed: " ;
}
