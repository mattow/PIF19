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
    <title></title>
  </head>
  <body>
    <?php 
    
    echo $_GET["TABLE"];
    $table = $_GET["TABLE"];
    echo $_GET["NUMBER"];
    echo $_GET["STREET"];
    echo $_GET["CITY"];
    echo $_GET["STATE"];
    echo $_GET["COUNTRY"];
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
   
   if ($table == "tbl_address") {
      $sql = "INSERT INTO tbl_address ( NUMBER , STREET , CITY , STATE , COUNTRY) VALUES ('".$_GET["NUMBER"]."' , '".$_GET["STREET"]."' , '".$_GET["CITY"]."' , '".$_GET["STATE"]."' , '".$_GET["COUNTRY"]."')";
   }elseif ($table == "tbl_circuit") {
      $sql = "INSERT INTO tbl_circuit ( FIFIRM , COMMENT , DURATION , CREATEDATE , SEQUENZ) VALUES ('".$_GET["FIFIRM"]."' , '".$_GET["COMMENT"]."' , '".$_GET["DURATION"]."' , '".$_GET["CREATEDATE"]."' , '".$_GET["SEQUENZ"]."')";
   }elseif ($table == "tbl_client") {
      $sql = "INSERT INTO tbl_client ( FIADDRESS , NAME , NUMBER , EMAIL) VALUES ('".$_GET["FIADDRESS"]."' , '".$_GET["NAME"]."' , '".$_GET["NUMBER"]."' , '".$_GET["EMAIL"]."')";
   }elseif ($table == "tbl_firm") {
      $sql = "INSERT INTO tbl_firm ( FICLIENT , FIADDRESS , COMMENT , IPADDRESS , PHONENUMBER) VALUES ('".$_GET["FICLIENT"]."' , '".$_GET["FIADDRESS"]."' , '".$_GET["COMMENT"]."' , '".$_GET["IPADDRESS"]."', '".$_GET["PHONENUMBER"]."')";
   }elseif ($table == "tbl_token") {
      $sql = "INSERT INTO tbl_token ( IDTOKEN , VALID) VALUES ('".$_GET["IDTOKEN"]."' , '".$_GET["VALID"]."')";   
  }elseif ($table == "tbl_worker") {
      $sql = "INSERT INTO tbl_worker ( FITOKEN , FITOKEN , SURNAME , NAME  ,  FUNCTION , EMAIL , PASSWORD) VALUES ('".$_GET["FITOKEN"]."' , '".$_GET["FITOKEN"]."' , '".$_GET["SURNAME"]."' , '".$_GET["NAME"]."', '".$_GET["EMAIL"]."' , '".$_GET["PASSWORD"]."')";
  }
   
   if ($conn->query($sql) === TRUE) {
     echo "Record inserted successfully";
 } else {
     echo "Error inserting record: " . $conn->error;
 }
    
     ?>
  </body>
</html>