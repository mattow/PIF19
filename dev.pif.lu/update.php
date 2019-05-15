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
     $sql = "UPDATE tbl_address SET NUMBER='".$_GET["NUMBER"]."' , STREET='".$_GET["STREET"]."' , CITY='".$_GET["CITY"]."' , STATE='".$_GET["STATE"]."' , COUNTRY='".$_GET["COUNTRY"]."' WHERE IDADDRESS='".$_GET["IDADDRESS"]."'";   
   }elseif ($table == "tbl_circuit") {
     $sql = "UPDATE tbl_circuit SET FIFIRM='".$_GET["FIFIRM"]."' , COMMENT='".$_GET["COMMENT"]."' , DURATION='".$_GET["DURATION"]."' , CREATEDATE='".$_GET["CREATEDATE"]."' , SEQUENZ='".$_GET["SEQUENZ"]."' WHERE IDCIRCUIT='".$_GET["IDCIRCUIT"]."'";
   }elseif ($table == "tbl_client") {
     $sql = "UPDATE tbl_circuit SET FIADDRESS='".$_GET["FIADDRESS"]."' , NAME='".$_GET["NAME"]."' , NUMBER='".$_GET["NUMBER"]."' , EMAIL='".$_GET["CREATEDATE"]."' WHERE IDCLIENT='".$_GET["IDCLIENT"]."'"; 
   }elseif ($table == "tbl_firm") {
     $sql = "UPDATE tbl_firm SET FICLIENT='" . $_GET["FICLIENT"] . "' , FIADDRESS='" . $_GET["FIADDRESS"] . "' , COMMENT='" . $_GET["COMMENT"] . "' , IPADDRESS='" . $_GET["IPADDRESS"] . "' , PHONENUMBER='" . $_GET["PHONENUMBER"] . "' WHERE IDFIRM='". $_GET["IDFIRM"] ."'";
   }elseif ($table == "tbl_token") {
     $sql = "UPDATE tbl_token SET VALID='".$_GET["VALID"]."' WHERE IDTOKEN='".$_GET["IDTOKEN"]."'";
   }elseif ($table == "tbl_worker") {
     $sql = "UPDATE tbl_worker SET FITOKEN='".$_GET["FITOKEN"]."' , FITOKEN='".$_GET["FITOKEN"]."' , SURNAME='".$_GET["SURNAME"]."' , NAME='".$_GET["NAME"]."' , FUNCTION='".$_GET["FUNCTION"]."' , EMAIL='".$_GET["EMAIL"]."' , PASSWORD='".$_GET["PASSWORD"]."' WHERE IDWORKER='".$_GET["IDWORKER"]."'";
   }
   
   if ($conn->query($sql) === TRUE) {
     echo "Record updated successfully";
 } else {
     echo "Error updating record: " . $conn->error;
 }
    
     ?>
  </body>
</html>