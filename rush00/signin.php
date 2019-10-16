<?php
include_once('rush.php'); 
    $name = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $options = ['cost' => 12,];
    $passhash = password_hash($password, PASSWORD_BCRYPT, $options);
    
    $sql = ("insert into users (Username, Email, Password) values ('".$name."','".$email."', '".$passhash."')");
    echo "djfdjfrrrrrrrrr++++++++++kl;d";
    if($con->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Your details has been registered. Continue shopping or checkout")';
        echo '</script>';
        header("location: index.php");
    }
    else
    {
            echo '<script language="javascript">';
            echo 'alert("Email already exist. Please try a new one")';
            echo '</script>';
            header("location: Signup.php");
    }
?>