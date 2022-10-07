<?php
     require_once '../config/config.php';

    $userRef = $_POST['userRef'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE userRef = '$userRef' AND del_Status ='In Progress'");
    if(mysqli_num_rows($sql) >0){
        header("content-type: application/json");
        $status = json_encode(array('status' => 200));
        echo $status;
    }else{
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE userRef='$userRef' AND del_Status='In Transit'");
        if(mysqli_num_rows($sql) > 0){
            echo json_encode(array('status' => "moving"));
        }else{
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE userRef='$userRef' AND del_Status='ON HOLD'");
            if(mysqli_num_rows($sql) > 0){
                echo json_encode(array('status' => 'hold'));

            }else{
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE userRef='$userRef' AND del_Status='Available for Pickup'");
                if(mysqli_num_rows($sql) > 0){
                    echo json_encode(array('status' => 'available'));
                }else{
                    echo json_encode(array('status' => 500));
                }
            }
            
        }
        
    }


?>