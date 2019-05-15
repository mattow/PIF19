<?php
session_start();
$servername = "localhost";
$username = "malik";
$password = "test..123";
$dbname = "pif19";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

  echo "connected";

  $myusername = mysqli_real_escape_string($conn,$_POST['username']);
  $mypassword = mysqli_real_escape_string($conn,$_POST['password']);

  $sql = "SELECT * FROM tbl_worker WHERE EMAIL = '$myusername' and PASSWORD = '$mypassword' ";
  $result = mysqli_query($conn,$sql);

  $count = 0;
  while($row = mysqli_fetch_assoc($result)) {
        $position = $row['FUNCTION'];
        $count++;
  }
  echo $count;
  if($count == 1) {
    echo "works";
    $_SESSION['user'] = $myusername;
    $_SESSION['position'] = $position;
    header("location: menu.php");
  }else {
     echo "Your Login Name or Password is invalid";
     header("Location: index.php");
  }
?>
