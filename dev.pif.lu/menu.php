<?php
session_start();
echo "hello";

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
     <title>menu <?php echo $_SESSION['position'] ?> </title>
   </head>
   <body>

     <?php

     if ($_SESSION['position'] == "admin") {
       echo '<a href="address.php">tbl address</a><br>';
       echo '<a href="worker.php">tbl worker</a><br>';
       echo '<a href="circuit.php">tbl circuit</a><br>';
       echo '<a href="client.php">tbl client</a><br>';
       echo '<a href="firm.php">tbl firm</a><br>';
       echo '<a href="token.php">tbl token</a><br>';
       echo '<a href="absc.php">tbl absolved circuit</a><br>';
       echo '<a href="endsession.php">logout</a><br>';
     }elseif ($_SESSION['position'] == "worker") {
       echo '<a href="address.php">tbl address</a><br>';
       echo '<a href="circuit.php">tbl circuit</a><br>';
       echo '<a href="client.php">tbl client</a><br>';
       echo '<a href="firm.php">tbl firm</a><br>';
       echo '<a href="token.php">tbl token</a><br>';
       echo '<a href="absc.php">tbl absolved circuit</a><br>';
       echo '<a href="endsession.php">logout</a><br>';
     }





      ?>
   </body>
 </html>
