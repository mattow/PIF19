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
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit</title>
  </head>
  <body>
  <a href='menu.php'>back to menu</a><br>
  <?php 
      
      echo $_GET["a"];
      echo $_GET["d"];
      
      $table = $_GET["d"];
      
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
      
    
      $sql = "SELECT * FROM `$table`";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        
        if ($table=="tbl_address") {
          while($row = mysqli_fetch_assoc($result)) {
              echo '   <form class="" action="update.php" method="get">
                   <input type="text" name="TABLE" value="'.$table.'" ><br>
                   <input type="text" name="IDADDRESS" value="'.$row["IDADDRESS"].'"><br>
                   <input type="text" name="NUMBER" value="'.$row["NUMBER"].'"><br>
                   <input type="text" name="STREET" value="'.$row["STREET"].'"><br>
                   <input type="text" name="CITY" value="'.$row["CITY"].'"><br>
                   <input type="text" name="STATE" value="'.$row["STATE"].'"><br>
                   <input type="text" name="COUNTRY" value="'.$row["COUNTRY"].'"><br>
                   <input type="submit" name="" value="update">
                 </form>' ;     
          }
        }elseif ($table=="tbl_circuit") {
          while($row = mysqli_fetch_assoc($result)) {
              echo '   <form class="" action="update.php" method="post">
                   <input type="text" name="table" value="'.$table.'" disabled><br>
                   <input type="text" name="IDCIRCUIT" value="'.$row["IDCIRCUIT"].'" disabled><br>
                   <input type="text" name="" value="'.$row["COMMENT"].'"><br>
                   <input type="text" name="" value="'.$row["DURATION"].'"><br>
                   <input type="text" name="" value="'.$row["CREATEDATE"].'"><br>
                   <input type="text" name="" value="'.$row["SEQUENZ"].'"><br>
                   <input type="submit" name="" value="update">
                 </form>' ;     
          }
        }elseif ($table=="tbl_client") {
          while($row = mysqli_fetch_assoc($result)) {
              echo '   <form class="" action="update.php" method="post">
                   <input type="text" name="table" value="'.$table.'" disabled><br>
                   <input type="text" name="IDCLIENT" value="'.$row["IDCLIENT"].'" disabled><br>
                   <input type="text" name="" value="'.$row["NAME"].'"><br>
                   <input type="text" name="" value="'.$row["NUMBER"].'"><br>
                   <input type="text" name="" value="'.$row["EMAIL"].'"><br>
                   <input type="submit" name="" value="update">
                 </form>' ;     
          }
        }elseif ($table=="tbl_firm") {
          while($row = mysqli_fetch_assoc($result)) {
              echo '   <form class="" action="update.php" method="post">
                   <input type="text" name="table" value="'.$table.'" disabled><br>
                   <input type="text" name="IDFIRM" value="'.$row["IDFIRM"].'" disabled><br>
                   <input type="text" name="" value="'.$row["COMMENT"].'"><br>
                   <input type="text" name="" value="'.$row["IPADDRESS"].'"><br>
                   <input type="text" name="" value="'.$row["PHONENUMBER"].'"><br>
                   <input type="submit" name="" value="update">
                 </form>' ;     
          }
        }elseif ($table=="tbl_token") {
          while($row = mysqli_fetch_assoc($result)) {
              echo '   <form class="" action="update.php" method="post">
                   <input type="text" name="table" value="'.$table.'" disabled><br>
                   <input type="text" name="IDTOKEN" value="'.$row["IDTOKEN"].'" disabled><br>
                   <input type="text" name="VALID" value="'.$row["VALID"].'"><br>
                   <input type="submit" name="" value="update">
                 </form>' ;     
          }
        }elseif ($table=="tbl_worker") {
          while($row = mysqli_fetch_assoc($result)) {
              echo '   <form class="" action="update.php" method="post">
                   <input type="text" name="table" value="'.$table.'" disabled><br>
                   <input type="text" name="IDWORKER" value="'.$row["IDWORKER"].'" disabled><br>
                   <input type="text" name="SURNAME" value="'.$row["SURNAME"].'"><br>
                   <input type="text" name="NAME" value="'.$row["NAME"].'"><br>
                   <input type="text" name="FUNCTION" value="'.$row["FUNCTION"].'"><br>
                   <input type="text" name="EMAIL" value="'.$row["EMAIL"].'"><br>
                   <input type="text" name="PASSWORD" value="'.$row["PASSWORD"].'"><br>
                   <input type="submit" name="" value="update">
                 </form>' ;     
          }
        }
        
        
        
         
      } else {
         echo "0 results";
      }
      
      
      
      
      
   ?>
   

  </body>
</html>