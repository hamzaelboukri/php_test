
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
  <?php
  session_start();
  print_r($_SESSION);
  if (isset( $_SESSION['mesgge'])) {
    echo $_SESSION['mesgge'];
    unset($_SESSION['mesgge']);
   
  }

  ?>
  <form method="POST" action="">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <input type="password" name="password" id="password" placeholder="Enter your password">

    <select name="role" id="role">
      <option value="1">selectrole</option>
      <?php
      include 'connt.php';
      $stmt = $pdo->prepare("SELECT * FROM roles");
      $stmt->execute();
      $result = $stmt->fetchAll();

      foreach ($result as $row) {
          echo "<option value='" . $row['id'] . "'>" . $row['NAMEROLES'] . "</option>";
      }
      ?>
    </select>
    <button type="submit">save</button>
  </form>
</div>

</body>
</html>



<?php

