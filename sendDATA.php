<?php
session_start();
$email = $_POST ["email"];
$password = $_POST ["password"];
$role = $_POST ["role"];
if (empty($email)|| empty($password) || empty($role)) {

    $_SESSION['mesgge']= " email OR password OR  role is empty";
    header ('location: ./index.php');

  }
  else {
    $stmt=$pdo->prepare (' INSERT INTO userss values (:email, password, role)');
    $stmt->execut ([
        ':email'=>$email,
        ':password'=>$password,
        ':role'=>$role

    ]);



  }

?>