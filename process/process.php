<?php
    session_start();
    require_once '../config/config.php';
    $track = $_POST['track'];
    $sql = mysqli_query($conn,"SELECT * from users WHERE wayBilNo='$track'");
    if(mysqli_num_rows($sql)>0){
        $fetch = mysqli_fetch_assoc($sql);
        $_SESSION['tracking'] = true;
        $_SESSION['tracking'] = $fetch;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (30*60);
        header('Content-Type: application/json');
        echo json_encode(array("status" => 200));

    }else{
        echo json_encode(array("status" => 500));
    }
?>