<?php
session_start();

if (session_status() == PHP_SESSION_ACTIVE) {
  echo 'Session is active<br>';
    if (isset($_SESSION['user'])){
        echo $_SESSION['user'] . '<br>';
        echo $_SESSION['position']. '<br>';
    }else {
      header("Location: index.php");
    }
}else {
  header("Location: index.php");
}

echo "'<a href='menu.php'>back to menu</a><br>";


$servername = "localhost";
$username = "malik";
$password = "test..123";
$dbname = "pif19";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `tbl_token`";
$result = mysqli_query($conn, $sql);
echo "<a href='add.php?a={$row["IDTOKEN"]}&d=tbl_token'>add</a><br>";

if (mysqli_num_rows($result) > 0) {

   while($row = mysqli_fetch_assoc($result)) {
       $outp = "Id:" . $row["IDTOKEN"]. " - Valid: " . $row["VALID"];
       echo $outp;
       echo "<a href='edit.php?a={$row["IDTOKEN"]}&d=tbl_token'>edit</a><br>";
   }

} else {
   echo "0 results";
}

mysqli_close($conn);
 ?>
