<?php
include_once('rush.php');
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT password FROM `users` WHERE username = '$user'";
    $result = $con->query($sql);
    if ($result->num_rows === 1)
    {
        while ($row = $result->fetch_assoc())
        {
            $hash = $row["password"];
        }
        if (password_verify($password, $hash))
            header("location: index.php");
        else
            {
                echo '<script language="javascript">';
                echo 'alert("Incorrect user name or password")';
                echo '</script>';
                header("location: Login.php");
            }
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Incorrect user name or password")';
        echo '</script>';
        header("location: Login.php");
    }
?>