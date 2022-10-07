<?php
    session_start();
    require_once './config/config.php';
    
    function sanitize($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
    $user = $pass = $status = $user_er = $pass_er =  "";
    if(isset($_POST['submit'])){
        if(empty($_POST['username'])){
            $user_er = "This field is required";
        }else{
            $user = sanitize($_POST['username']);
        }
        if(empty($_POST['password'])){
            $pass_er = "This field is required";
        }else{
            
            $pass = sanitize($_POST['password']);

        }
        if(empty($user_er) && empty($pass_er) && empty($status)){
            $sql = mysqli_query($conn,"SELECT * FROM admin_user WHERE username='$user'");
            if($sql == true){
                $fetch = mysqli_fetch_assoc($sql);
                $password = $fetch['password'];
                if(password_verify($pass,$password)){
                    $_SESSION['admin'] = true;
                    header("location: ./main/users");
                }else{
                    $status = "<p class='alert alert-danger'>Invalid Password Or Username</p>";
                }
            }
        }
    }

?>