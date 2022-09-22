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
          
        }

        echo "$a_name";
        echo "$a_mail";
        echo "$a_password";
        echo "$event_name";
        // echo "$a_name";


      
    }


?>