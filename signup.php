<?php
    session_start(); 
    include "db_conn.php";



    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }




    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //admin name
        if (empty($_POST["a_name"])) {
          $a_nameErr = "Name is required";
        } else {
          $a_name = test_input($_POST["a_name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $a_nameErr = "Only letters and white space allowed";
          }
        }
      
        //admin mail
        if (empty($_POST["a_mail"])) {
          $a_mailErr = "Email is required";
        } else {
          $a_mail = test_input($_POST["a_mail"]);
          // check if e-mail address is well-formed
          if (!filter_var($a_mail, FILTER_VALIDATE_EMAIL)) {
            $a_mailErr = "Invalid email format";
          }
        }

        // admin password
        if (empty($_POST["a_password"])) {
          $a_passwordErr = "Password is required";
        } else {
          $a_password = test_input($_POST["a_password"]);
          
        }
        //event name
        if (empty($_POST["event_name"])) {
          $event_nameErr = "Password is required";
        } else {
          $event_name = test_input($_POST["event_name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $event_nameErr = "Only letters and white space allowed";
          }
          
          //event start date
        if (empty($_POST["event_sdate"])) {
          $event_sdateErr = "Event start date is required";
        } else {
          $event_sdate = test_input($_POST["event_sdate"]);
          
          
        }
          //event start time
        if (empty($_POST["event_stime"])) {
          $event_stimeErr = "Password is required";
        } else {
          $event_stime = test_input($_POST["event_stime"]);
          
          
        }
          //event end date
        if (empty($_POST["event_edate"])) {
          $event_edateErr = "Password is required";
        } else 
          $event_edate = test_input($_POST["event_edate"]);
          
          
        }
          //event end time
        if (empty($_POST["event_etime"])) {
          $event_etimeErr = "Password is required";
        } else {
          $event_etime = test_input($_POST["event_etime"]);
          
          
        }

        //event venue
        if (empty($_POST["event_venue"])) {
            $event_venueErr = "Event venue  is required";
          } else {
            $event_venuetime = test_input($_POST["event_venue"]);
            
          }


        //event organizer
        if (empty($_POST["event_organizer"])) {
            $event_organizerErr = "Event organizer  is required";
          } else {
            $event_organizer = test_input($_POST["event_venue"]);
            
          }

        // echo "$a_name";
        // echo "$a_mail";
        // echo "$a_password";
        // echo "$event_name";
        // echo "$a_name";


      
    }


?>