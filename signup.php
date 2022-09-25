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


        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $event_id=substr(str_shuffle($data), 0, 6);
        $_SESSION["event_id"]= $event_id;
        // echo "$event_id"; 

        // //admin name
        // if (empty($_POST["a_name"])) {
        //   $a_nameErr = "Name is required";
        // } else {
        //   $a_name = test_input($_POST["a_name"]);
        //   $_SESSION["a_name"]= $a_name;
        //   // check if name only contains letters and whitespace
        //   if (!preg_match("/^[a-zA-Z-' ]*$/",$a_name)) {
        //     $a_nameErr = "Only letters and white space allowed";
        //   }
        // }
      
        // //admin mail
        // if (empty($_POST["a_mail"])) {
        //   $a_mailErr = "Email is required";
        // } else {
        //   $a_mail = test_input($_POST["a_mail"]);
        //   $_SESSION["a_mail"]= $a_mail;
        //   // check if e-mail address is well-formed
        //   if (!filter_var($a_mail, FILTER_VALIDATE_EMAIL)) {
        //     $a_mailErr = "Invalid email format";
        //   }
        // }

        // // admin password
        // if (empty($_POST["a_password"])) {
        //   $a_passwordErr = "Password is required";
        // } else {
        //   $a_password = test_input($_POST["a_password"]);
        // //   $_SESSION["event_id"]= $event_id;
          
        // }
        // //event name
        // if (empty($_POST["event_name"])) {
        //   $event_nameErr = "Password is required";
        // } else {
        //   $event_name = test_input($_POST["event_name"]);
        //   $_SESSION["event_name"]= $event_name;
        //   if (!preg_match("/^[a-zA-Z-' ]*$/",$event_name)) {
        //     $event_nameErr = "Only letters and white space allowed";
        //   }
          
        //   //event start date
        // if (empty($_POST["event_sdate"])) {
        //   $event_sdateErr = "Event start date is required";
        // } else {
        //   $event_sdate = test_input($_POST["event_sdate"]);
        //   $_SESSION["event_sdate"]= $event_sdate;
          
          
        // }
        //   //event start time
        // if (empty($_POST["event_stime"])) {
        //   $event_stimeErr = "Password is required";
        // } else {
        //   $event_stime = test_input($_POST["event_stime"]);
        //   $_SESSION["event_stime"]= $event_stime;
          
          
        // }
        //   //event end date
        // if (empty($_POST["event_edate"])) {
        //   $event_edateErr = "Password is required";
        // } else 
        //   $event_edate = test_input($_POST["event_edate"]);
        //   $_SESSION["event_edate"]= $event_edate;
          
          
        // }
        //   //event end time
        // if (empty($_POST["event_etime"])) {
        //   $event_etimeErr = "Password is required";
        // } else {
        //   $event_etime = test_input($_POST["event_etime"]);
        //   $_SESSION["event_etime"]= $event_etime;
          
          
        // }

        // //event venue
        // if (empty($_POST["event_venue"])) {
        //     $event_venueErr = "Event venue  is required";
        //   } else {
        //     $event_venue = test_input($_POST["event_venue"]);
        //     $_SESSION["event_venue"]= $event_venue;
            
        //   }


        // //event organizer
        // if (empty($_POST["organizer"])) {
        //     $organizerErr = "Event organizer  is required";
        //   } else {
        //     $organizer = test_input($_POST["organizer"]);
        //     $_SESSION["organizer"]= $organizer;
            
        //   }
        // //event description
        // if (empty($_POST["event_desc"])) {
        //     $event_descErr = "event_desc  is required";
        //   } else {
        //     $event_desc = test_input($_POST["event_desc"]);
        //     $_SESSION["event_desc"]= $event_desc;
            
        //   }

        //   //event brochure
        // if (empty($_POST["event_broc"])) {
        //     $event_brocErr = "Event Brochure  is required";
        //   } else {
        //     $event_broc= test_input($_POST["event_broc"]);
        //     // $_SESSION["event_id"]= $event_id;
            
        //   }


        //   //event carousel
        // if (empty($_POST["event_caro"])) {
        //     $event_caroErr = "Event carousel  is required";
        //   } else {
        //     $event_caro= test_input($_POST["event_broc"]);
        //     // $_SESSION["event_id"]= $event_id;
            
        //   }



        //admin name
        if (empty($_POST["a_name"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
        } else {
          $a_name = test_input($_POST["a_name"]);
          $_SESSION["a_name"]= $a_name;
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$a_name)) {
            $a_nameErr = "Only letters and white space allowed";
          }
        }
      
        //admin mail
        if (empty($_POST["a_mail"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();;
        } else {
          $a_mail = test_input($_POST["a_mail"]);
          $_SESSION["a_mail"]= $a_mail;
          // check if e-mail address is well-formed
          if (!filter_var($a_mail, FILTER_VALIDATE_EMAIL)) {
            $a_mailErr = "Invalid email format";
          }
        }

        // admin password
        if (empty($_POST["a_password"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
        } else {
          $a_password = test_input($_POST["a_password"]);
        //   $_SESSION["event_id"]= $event_id;
          
        }
        //event name
        if (empty($_POST["event_name"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
        } else {
          $event_name = test_input($_POST["event_name"]);
          $_SESSION["event_name"]= $event_name;
          if (!preg_match("/^[a-zA-Z-' ]*$/",$event_name)) {
            $event_nameErr = "Only letters and white space allowed";
          }
          
          //event start date
        if (empty($_POST["event_sdate"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
        } else {
          $event_sdate = test_input($_POST["event_sdate"]);
         
          
          
        }
          //event start time
        if (empty($_POST["event_stime"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
        } else {
          $event_stime = test_input($_POST["event_stime"]);
        
          
          
        }
          //event end date
        if (empty($_POST["event_edate"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
        } else 
          $event_edate = test_input($_POST["event_edate"]);
         
          
          
        }
          //event end time
        if (empty($_POST["event_etime"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
        } else {
          $event_etime = test_input($_POST["event_etime"]);
          
          
          
        }

        //event venue
        if (empty($_POST["event_venue"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
          } else {
            $event_venue = test_input($_POST["event_venue"]);
            
            
          }


        //event organizer
        if (empty($_POST["organizer"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
          } else {
            $organizer = test_input($_POST["organizer"]);
           
            
          }
        //event description
        if (empty($_POST["event_desc"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
          } else {
            $event_desc = test_input($_POST["event_desc"]);
           
            
          }

          //event brochure
        if (empty($_POST["event_broc"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
          } else {
            $event_broc= test_input($_POST["event_broc"]);
            // $pdf=$_FILES['pdf']['name'];
            // $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
            // $pdf_store="pdf/".$pdf;
           
            // move_uploaded_file($pdf_tem_loc,$pdf_store);
            
          }


          //event carousel
        if (empty($_POST["event_caro"])) {
            header("Location: signup-login.html?error=User Name is required");
            exit();
          } else {
            $event_caro= test_input($_POST["event_broc"]);
            // $_SESSION["event_id"]= $event_id;
            
          }

        // //   <br>
        // echo "admin name :$a_name <br>";
        // echo "admin mail: $a_mail <br>";
        // echo "admin password: $a_password <br>";
        // echo "event name : $event_name <br>";
        // echo"event start date and time : $event_sdate";
        // echo"$event_stime <br>";
        // echo"event end date and time : $event_edate";
        // echo"$event_etime <br>";
       
        // echo "event brochure: $event_broc <br>";
        // echo"event carousel: $event_caro <br>";

        // $filePointer = fopen($_FILES['fileUpload']['tmp_name'], 'r');
        // $fileData = fread($filePointer, filesize($_FILES['fileUpload']['tmp_name']));
        // $fileData = addslashes($fileData);

        $stmt=$conn->prepare("INSERT INTO admins (event_id, a_mail, a_name, a_password, event_name, event_sdate, event_stime, event_edate, event_etime, event_venue, organizer, event_desc, event_broc, event_caro) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssbb",$event_id, $a_mail, $a_name, $a_password, $event_name, $event_sdate, $event_stime, $event_edate, $event_etime, $event_venue, $organizer, $event_desc, $event_broc, $event_caro);
        $stmt->execute();
        echo "New records created successfully";
        $stmt->close();



      
       




        

        
    }


?>