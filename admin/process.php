<?php
    require_once "./../config/config.php";
    function clean($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // Registration query
    $file = $sendName = $sendNum = $sendEmail = $recName = $recNum = $recEmail = $recAddress = 
    $depCity = $delCity = $dim = $weight = $regTime = $regDate = "";
    $file_er = $sendName_er = $sendNum_er = $sendEmail_er = $recName_er = $recNum_er = $recEmail_er = $recAddress_er = 
    $depCity_er = $delCity_er = $dim_er = $weight_er = $regTime_er = $regDate_er =  "";
    if(isset($_POST['submit'])){
        $email_input = $_POST['sender-email'];
        $phone_input = $_POST['sender-phone'];
        $sqlSearch = mysqli_query($conn, "SELECT * FROM users WHERE sender_phone = '$phone_input'");
        $sqEmail = mysqli_query($conn, "SELECT * FROM users WHERE sender_email = '$email_input'");

        if(empty($_POST['sender-name'])){
            $sendName_er = "This Field is required";
        }else{
            $name = $_POST['sender-name'];
            if(!preg_match("/^[a-zA-Z- ]*$/",$name)){
                $name_er = "Only letters and white space are allowed";
                
            }else{
                $sendName = clean($_POST['sender-name']);
            }
        }
        if(empty($_POST['sender-email'])){
            $sendEmail_er = "This field is required";
        }elseif(mysqli_num_rows($sqEmail)>0){
            $sendEmail_er = "Email address already exists";
        }else{
            $email = $_POST['sender-email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $sendEmail_er = "Invalid Email Address";
            }else{
                $sendEmail = clean($_POST['sender-email']);
            }
        }
        if(empty($_POST['sender-phone'])){
            $sendNum_er = "This field is required";
        }elseif(mysqli_num_rows($sqlSearch)>0){
            $sendNum_er = "Phone number already exists";
        }
        else{
            $sendNum = clean($_POST['sender-phone']);
        }
        if(empty($_POST['rec-name'])){
            $recName_er = "This field is required";
        }else{
            $receiver_name = $_POST['rec-name'];
            if(!preg_match("/^[a-zA-Z- ]*$/",$receiver_name)){
                $recName_er = "Only letters and white space are allowed";
            }else{
                $recName = clean($_POST['rec-name']);
            }
        }
        if(empty($_POST['rec-email'])){
            $recEmail_er = "This Field is required";
        }else{
            $reciever_email = $_POST['rec-email'];
            if(!filter_var($reciever_email, FILTER_VALIDATE_EMAIL)){
                $recEmail_er = "Invalid Email Format";
            }else{
                $recEmail = clean($_POST['rec-email']);
            }
        }
        if(empty($_POST['rec-phone'])){
            $recNum_er = "This field is required";
        }else{
            $recNum = clean($_POST['rec-phone']);
        }
        if(empty($_POST['address'])){
            $recAddress_er = "This field is required";
        }else{
            $recAddress = clean($_POST['address']);
        }
        if(empty($_POST['depart-city'])){
            $depCity_er = "This field is required";
        }else{
            $depCity = clean($_POST['depart-city']);
        }
        if(empty($_POST['del-city'])){
            $delCity_er = "This field is required";
        }else{
            $delCity = clean($_POST['del-city']);
        }
        if(empty($_POST['weight'])){
            $weight_er = "This field is required";
        }else{
            $weight = clean($_POST['weight']);
        }
        if(empty($_POST['dimension'])){
            $dim_er = "This field is required";
        }else{
            $dim = clean($_POST['dimension']);
        }
        if(empty($_POST['regTime'])){
            $regTime_er = "This field is required";
        }else{
            $regTime = clean($_POST['regTime']);
        }
        if(empty($_POST['regDate'])){
            $regDate_er = "This field is required";
        }else{
            $regDate = clean($_POST['regDate']);
        }
        $upload = "uploads/";
        $uploadOk = 1;
        $target_dir = $upload.basename($_FILES['fileUpload']['name']);
        $file_ext = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
        if($_FILES['fileUpload']['size']>5000000){
            $file_er = "Image is too large";
            $uploadOk = 0;
        }
        if($file_ext != "jpg" && $file_ext != "jpeg" && $file_ext != "png" && $file_ext !=
        "gif"){
            $file_er = "Image is not supported(Only JPG, JPEG, PNG & GIF files are allowed.)";
            $uploadOk = 0;
        }
        if(file_exists($target_dir)){
            $file_er ="File already in use";
            $uploadOk = 0;
        }
        if($uploadOk == 0){
            $file_er = "Sorry, your file was not uploaded.";
        }else{
            if(empty($file_er) && empty($sendName_er) && empty($sendNum_er) && empty($sendEmail_er) &&
                empty($recName_er) && empty($recEmail_er) && empty($recNum_er) && empty($recAddress_er)
                && empty($weight_er) && empty($depCity_er) && empty($delCity_er) && empty($regTime_er) &&
                empty($regDate_er)
            ){
                if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$target_dir)){
                    $userRef = "REF".rand(000000,999999);
                    $trackNo = "STF".rand(0000000,9999999);
                   $stmt = $conn->prepare("INSERT INTO users(userRef,wayBilNo,senderPhoto,city_Depart,city_deliver,weight,dimen,sender_name, 	
                   sender_email,sender_phone,receiver_name,receiver_email,receiver_phone,receiver_address,time,date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                   $stmt->bind_Param('ssssssssssssssss',$userRef,$trackNo,$target_dir,$depCity,$delCity,$weight,$dim,$sendName,$sendEmail,$sendNum,$recName,$recEmail,$recNum,
                   $recAddress,$regTime,$regDate);
                   $stmt->execute();
                   if($stmt->affected_rows >0){
                    echo "<script>alert('File has been upload')</script>";
                   }
                }else{
                    echo "<script>alert('File failed to be uploaded')</script>";
                }
            }else{
                echo "Not empty";
                
            }
        }
    }

    // update shipment depart history
    $dept = $message = $time = $date = "";
    $dept_er = $message_er = $time_er = $date_er = "";

    if(isset($_POST['ship-depart'])){
        $message_length = strlen($_POST['message']);
        $dept_length = strlen($_POST['dept']);
        $userRef = $_POST['userRef'];
        if(empty($_POST['dept'])){
            $dept_er = "This Field is required";
        }elseif($dept_length > 30){
            $dept_er = "Depart From Input shouldn't be greater than 30 characters";
        }
        else{
            $dept = $_POST['dept'];
        }
        if(empty($_POST['message'])){
            $message_er = "This Field is required";
        }elseif($message_length > 70){
            $message_er = "Shipment Message Input shouldn't be greater than 70 characters";
        }
        else{
            $message = $_POST['message'];
        }
        if(empty($_POST['time'])){
            $time_er = "This Field is required";
        }else{
            $time = $_POST['time'];
        }
        if(empty($_POST['date'])){
            $date_er = "This Field is required";
        }else{
            $date = $_POST['date'];
        }
        if(empty($dept_er) && empty($date_er) && empty($message_er) && empty($time_er)){
            $sql = mysqli_query($conn, "INSERT INTO arrival(userRef,heading,body,time,date)VALUES('$userRef','$dept','$message','$time','$date')	
            ");
            if($sql == true){
                echo "<script>alert('Information has been updated');</script>";
            }else{
                echo "<script>alert('Information failed to update');</script>";
                var_dump($conn);
            }
        }
    }
// Delete user query
    if(isset($_POST['yes'])){
        $removeUser = $_POST['deleteId'];
        $sql = "DELETE FROM users WHERE userRef='$removeUser'";
        if($conn->query($sql)){
            echo "<script>alert('Customer deleted successfully');window.location.href='users.php';</script>";
        }else{
            echo "<script>alert('Customer failed to delete');window.location.reload();</script>";
        }
    }
?>