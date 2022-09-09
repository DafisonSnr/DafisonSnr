<?php
session_start();
require_once './config/config.php';
if(!isset($_SESSION['tracking'])){
    header("location: ../index.php");
}else{
    $time = time();
    if($time > $_SESSION['expire']){
        session_destroy();
        echo "<script>alert('Session expired');window.location.href='../index.php';</script>";
    }
}
?>