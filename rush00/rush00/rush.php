<?php

include_once('createDB.php');

  $servername = "localhost";
  $username = "root";
  $password = "fele8686";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=myDBPDO", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";


      $sql = "CREATE TABLE IF NOT EXISTS UserTable (
         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         Username VARCHAR(30) NOT NULL,
         pwd VARCHAR(30) NOT NULL,
         email VARCHAR(500)
         )";
     
         // use exec() because no results are returned
         $conn->exec($sql);
         echo "Table UserTable created successfully";
      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
  ?>
