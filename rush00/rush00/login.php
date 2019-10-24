<?php
// include_once('rush.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($_POST['login']))
    {
        $servername = "localhost";
        $namedb = "root";
        $pwd = "fele8686";
        try{
        
            $conn = new PDO("mysql:host=$servername;dbname=myDBPDO", $namedb, $pwd);
            // set the PDO error mode to exception
       
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $options = ['cost' => 12,];
            // $passhash = password_hash($password, PASSWORD_BCRYPT, $options);
            
            $sql = $conn->prepare("SELECT * FROM UserTable WHERE Username = '".$username."' LIMIT 1");
            $sql->execute();
            $user =$sql->fetch(PDO:: FETCH_ASSOC);
            echo password_hash($password, PASSWORD_BCRYPT, array('cost' =>10));
            echo "########################";
            echo $user['pwd'];
            var_dump(password_verify($password, $user['pwd']));
            // die();
            if (password_verify($password, $user['pwd'])) {
            // $result = $sql->fetchColumn();
            
            // echo $result;
            
            // if ($result == 1)
            // {
                echo "correct";
            }
            else
            {
                echo "not correct";
            }
            // $res = $conn->query($sql);
            // $rc = $res->rowCount();
            // echo $rc;

            // if ($rc == 1)
            //  {
            //     echo "  - you are in";
            //     //  header("location: home.php");
            //     //  $_SESSION['username'];
            //  }
            //  else
            //  {
            //      echo " - incorrect credantials";
            //  }
                // if ($res->fetchColumn() > 0) 
                // {
                    
                    //echo "  - you are in";
                    //echo "Rows:  " + $res->rowCount();

                    // $sql = "SELECT * FROM UserTable WHERE Username = '".$user."' AND pwd = '".$password."'";

                //}
         

            
            // $result = $res->rowCount();
            
            // echo $res;

             
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
       
    }
?>