<?php
   $con = mysqli_connect('localhost', 'root','Fele8686', 'mydatab');
   if (!$con) 
   {
      die("Connection failed: " . mysqli_connect_error());
   }
?>