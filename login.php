<?php
session_start();
 include "db_conn.php";

    // if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    if (isset($_POST['event_id']) && isset($_POST['p_password']) && isset($_POST['p_email'])) {
    
        
        function validate($data){
            $data =trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $event_id=validate($_POST['event_id']);
        $p_email=validate($_POST['p_email']);
        $p_password=validate($_POST['p_password']);

        if(empty($event_id)){
            header("Location: signup-login.html?error=Event Id is required");
            exit();
        }
        elseif(empty($p_email)){
            header("Location: signup-login.html?error=Mail Id is required");
            exit();

        }
        elseif(empty($p_password)){
            header("Location: signup-login.html?error=Password is required");
            exit();

        }
        else{
            $sql= "SELECT * FROM participants WHERE event_id='$event_id' AND p_password='$p_password' AND p_email='$p_email'";
            $result=$conn->query($sql);
            // echo "$result";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                  // the function fetch_assoc() puts all the results into an associative array($row) 
              
                  echo "Event_id: " . $row["event_id"]. " - p_email: " . $row["p_email"]. " " . $row["p_password"]. "<br>";
                }
              } else {
                echo "0 results";
              }

        }

       
    }


 



?>