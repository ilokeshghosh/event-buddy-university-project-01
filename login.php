<?php 
    session_start();
        include "db_conn.php";
        if(isset($_POST['event_id']) && isset($_POST['a_password']) && isset($_POST['a_mail'])){

            
            function validate($data){
                $data =trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            $event_id=validate($_POST['event_id']);
            $a_password=validate($_POST['a_password']);
            $a_mail=validate($_POST['a_mail']);

            if(empty($event_id)){
                header("Location: signup-login.html?error=Event Id is required");
                exit();
            }
            elseif (empty($a_mail)) {
                header("Location: signup-login.html?error=Mail Id is required");
                exit();
            }
            elseif(empty($a_password)){
                header("Location: signup-login.html?error=Password is required");
                exit();
            }
            else{
               $sql="SELECT * FROM admins WHERE event_id='$event_id' AND a_mail='$a_mail' AND a_password='$a_password'";
               $result=$conn->query($sql);
               if($result->num_rows > 0){
                    $row=$result->fetch_assoc();
                    if ($row['event_id'] === $event_id && $row['a_mail'] === $a_mail && $row['a_password']) {
                        $_SESSION['event_id'] = $row['event_id'];
                        $_SESSION['p_mail'] = $row['p_mail'];
                        $_SESSION['p_password'] = $row['p_password'];
                        // echo" hi ";
                        header("Location: admin.html");
                        exit();
                    }else{
                        header("Location: signup-login.html?error=Incorrect User name or password");
                        exit();
                    }
               }
               else{
                header("Location: signup-login.html?error=Incorrect User name or password");
                exit();
               }
            } 
        }
        else{
            header("Location: signup-login.html");
            exit();
        }

       


?>


// <!-- scripts  -->

<!-- <script type="text/javascript" src="file.js"></script> -->

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

