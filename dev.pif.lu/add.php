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
    <title>ADD a record</title>
  </head>
  <body>
    <?php 
        
        echo $_GET["d"];
        $table = $_GET["d"];
    
          if ($table=="tbl_address") {
                echo '   <form class="" action="adata.php" method="get">
                     <input type="text" name="TABLE" value="'.$table.'" ><br>
                     <input type="text" name="NUMBER" value=""><br>
                     <input type="text" name="STREET" value=""><br>
                     <input type="text" name="CITY" value=""><br>
                     <input type="text" name="STATE" value=""><br>
                     <input type="text" name="COUNTRY" value=""><br>
                     <input type="submit" name="" value="adata">
                   </form>' ;     
          }elseif ($table=="tbl_circuit") {
                echo '   <form class="" action="adata.php" method="get">
                     <input type="text" name="table" value="'.$table.'" disabled><br>
                     <input type="text" name="" value=""><br>
                     <input type="text" name="" value=""><br>
                     <input type="text" name="" value=""><br>
                     <input type="text" name="" value=""><br>
                     <input type="submit" name="" value="adata">
                   </form>' ;     
          }elseif ($table=="tbl_client") {
                echo '   <form class="" action="adata.php" method="get">
                     <input type="text" name="table" value="'.$table.'" disabled><br>
                     <input type="text" name="" value=""><br>
                     <input type="text" name="" value=""><br>
                     <input type="text" name="" value=""><br>
                     <input type="submit" name="" value="adata">
                   </form>' ;     
          }elseif ($table=="tbl_firm") {
                echo '   <form class="" action="adata.php" method="get">
                     <input type="text" name="table" value="'.$table.'" disabled><br>
                     <input type="text" name="" value=""><br>
                     <input type="text" name="" value=""><br>
                     <input type="text" name="" value=""><br>
                     <input type="submit" name="" value="adata">
                   </form>' ;     
          }elseif ($table=="tbl_token") {
                echo '   <form class="" action="adata.php" method="get">
                     <input type="text" name="table" value="'.$table.'" disabled><br>
                     <input type="text" name="VALID" value=""><br>
                     <input type="submit" name="" value="adata">
                   </form>' ;       
          }elseif ($table=="tbl_worker") {
                echo '   <form class="" action="adata.php" method="get">
                     <input type="text" name="table" value="'.$table.'" disabled><br>
                     <input type="text" name="SURNAME" value=""><br>
                     <input type="text" name="NAME" value=""><br>
                     <input type="text" name="FUNCTION" value=""><br>
                     <input type="text" name="EMAIL" value=""><br>
                     <input type="text" name="PASSWORD" value=""><br>
                     <input type="submit" name="" value="adata">
                   </form>' ;     
          }
          

     ?>
  </body>
</html>