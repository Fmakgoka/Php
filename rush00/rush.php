<?php
   //connect to db
   $conn = mysqli_connect('localhost', 'root','Fele8686', 'mydatab');
   //validation
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
   $sql = "CREATE TABLE `mydatab`.`user table` ( 
      `ID` INT NOT NULL AUTO_INCREMENT , `Username` VARCHAR(8) NOT NULL , 
      `Email` VARCHAR(20) NOT NULL , `Password` VARCHAR(12) NOT NULL ,
       PRIMARY KEY (`ID`))";
      
      if (mysqli_query($conn, $sql)) {
          echo "Table Users created successfully";
          echo "\n";
      } else {
          echo "Error creating table: " . mysqli_error($conn);
      }
   $sql = "CREATE TABLE `mydatab`.`store table` ( 
      `ID` INT NOT NULL AUTO_INCREMENT , `Product Name` TEXT NOT NULL , 
      `Price` INT NOT NULL , `Amount` INT NOT NULL , PRIMARY KEY (`ID`))";
   if (mysqli_query($conn, $sql)) {
      echo "Table Users created successfully\n";
    } else {
       echo "Error creating table: " . mysqli_error($conn);
   }
      mysqli_close($conn);
   
?>