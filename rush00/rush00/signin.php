<?php
include_once('createDB.php');

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['Password'];

    // $options = ['cost' => 12,];
    $passhash = password_hash($password, PASSWORD_BCRYPT, array('cost' =>10));

    if (isset($_POST['register']))
    {   
    echo "Hello there";

    $servername = "localhost";
    $username = "root";
    $password = "fele8686";
   
    try 
    {
         $conn = new PDO("mysql:host=$servername;dbname=myDBPDO", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";


        $sql = "CREATE TABLE IF NOT EXISTS UserTable (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Username VARCHAR(30) NOT NULL,
            email VARCHAR(500),
            pwd VARCHAR(500) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
        // use exec() because no results are returned
        
        $conn->exec($sql);
        echo "Table UserTable created successfully";
        $sql = "INSERT INTO UserTable (Username, email, pwd) VALUES ('".$name."','".$email."', '".$passhash."')";
        $conn->exec($sql);
        echo "Hello there after";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
   
}   
?>