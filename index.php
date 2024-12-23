<?php

include 'conn.php';
$Email="";
$Password="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {
  $Email=$_POST['email'];
  $Password=$_POST['password'];

  // if ($empty $email ) {
  //   echo "Enter email"
  // }
  // if ($empty $password) {
  //  echo "Enter pasword"
  // }

 $stmt = $conn->prepare("INSERT INTO userss (email ,password) VALUES (?, ?)");
 $stmt->bind_param("ss");

 if ($stmt->execute()) {
  echo "22222";
} else {
  echo "dddd: " . $stmt->error;
}

 $stmt->close();


}






?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div>

<input type="email" name="email" id="email" placeholder="Enter your email">
<input type="password" name="password" id="password" placeholder="Enter your password">
 <?php print_r($email)  ?>

<select name="" id="">
<option value="1">selectrole</option>
<?php
include 'conn.php';


                  $sql = "SELECT * FROM roles";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) {
                      echo "<option value='" . $row['id'] . "'>" . $row['NAMEROLES'] . "</option>";
                  }
                ?>
</select>
</select>
<button>save</button>
</div>


  
</body>
</html>