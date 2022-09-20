<?php
session_start();
    include "db_conn.php";
    if(isset($_POST['event_id']) && isset($_POST['p_password']) && isset($_POST['p_mail'])){
        function validate($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $event_id = validate($_POST['event_id']);
        $p_password = validate($_POST['p_password']);
        $p_mail = validate($_POST['p_mail']);
       


        if(empty($event_id)){
            header("Location: signup-login.html?error=Event ID is required");
            exit();
        }
        elseif(empty($p_password)){
            header("Location: signup-login.html?error=Password is required");
            exit();
        }
        elseif(empty($p_mail)){
            header("Location: signup-login.html?error=Mail ID is required");
            exit();
        }

        

        else{
            $sql ="SELECT * FROM participants WHERE event_id='$event_id' AND p_password='$p_password'";

        }

    }


?>