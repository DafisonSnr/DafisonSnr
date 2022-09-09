<?php
    // $host = "localhost";
    // $user = "root";
    // $pass = "root";
    // $db = "courierDataBase";
    // $conn = mysqli_connect($host,$user,$pass,$db);
    // if(!$conn){
    //     die("Couldn't connect to host".mysqli_connect_error());
    // }
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "courierDataBase";
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die("Couldn't connect to host".mysqli_connect_error());
    }
//    $sql = "CREATE TABLE users(
//     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     senderPhoto VARCHAR(500) NOT NULL,
//     city_Depart VARCHAR(50) NOT NULL,
//     city_deliver VARCHAR(100) NOT NULL,
//     weight VARCHAR(50) NOT NULL,
//     dimen VARCHAR(50) NOT NULL,
//     sender_name VARCHAR(100) NOT NULL,
//     sender_email VARCHAR(100) NOT NULL,
//     sender_phone VARCHAR(100) NOT NULL,
//     receiver_name VARCHAR(100) NOT NULL,
//     receiver_email VARCHAR(100) NOT NULL,
//     receiver_phone VARCHAR(100) NOT NULL,
//     receiver_address VARCHAR(500) NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
//     if($conn->query($sql) == true){
//         echo "table created successfully";
//     }else{
//         echo "failed to create".$conn->error;
//     }
?>