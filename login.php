<?php
session_start();
 include "db_conn.php";

    // if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    if (isset($_POST['event_id']) && isset($_POST['p_password']) && isset($_POST['p_email'])) {
    
        $event_id=$_POST['event_id'];
        $p_email=$_POST['p_email'];
        $p_password=$_POST['p_password'];

        if(empty($event_id && $p_email && $p_password)){
            echo "Enter all data";
        }
        else{
            echo"$event_id";
            echo"$p_email";
            echo"$p_password";
        }

       
    }


 



?>