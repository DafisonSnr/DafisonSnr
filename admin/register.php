<?php
    require_once './process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <!-- <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="./css/user.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row shadow-lg w-100 mx-auto p-5 mt-5" style="background: #f3f6fc;">
            <div class="col-lg-5 col-sm-5 col-md-5">
                <img src="./img/hand.jpeg" alt="" class="h-75vh" style="width: 100%; height: 75vh">
            </div>
            <div class="col-lg-7 col-sm-7 col-md-7 h-75vh input-container w-100">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-4">
                        <input type="file" name="fileUpload" id="" onchange="showPhoto(this);" class="form-control" required>
                        <img id="preview" src="#" alt="">
                        <span class="text-danger d-block"><?=$file_er?></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="depart-city" id="" class="form-control" placeholder="Enter City of Departure" required>
                            <span class="text-danger d-block"><?=$depCity_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="del-city" id="" class="form-control" placeholder="Enter Delivery City" required>
                            <span class="text-danger d-block"><?=$delCity_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="weight" id="" class="form-control" placeholder="Enter Total Weight(kg)" required>
                            <span class="text-danger d-block"><?=$weight_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="dimension" id="" class="form-control" placeholder="Dimensions(cm) Optional" required>
                            <span class="text-danger d-block"><?=$dim_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="regTime" id="" class="form-control" placeholder="Enter Time(05:38 PM)" required>
                            <span class="text-danger d-block"><?=$regTime_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="regDate" id="" class="form-control" placeholder="Enter Date(20 Aug,2022)" required>
                            <span class="text-danger d-block"><?=$regDate_er?></span>
                        </div>
                    </div>
                    <div class="sender-details">
                        <h5 class="fs-6 text-uppercase mt-5">Sender Personal Details</h5>
                        <div class="form-group">
                            <input type="text" name="sender-name" id="" class="form-control" placeholder="Enter Full Name" required>
                            <span class="text-danger d-block"><?=$sendName_er?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="sender-email" id="" class="form-control" placeholder="Enter Email" required>
                            <span class="text-danger d-block"><?=$sendEmail_er?></span>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="sender-phone" id="" class="form-control" placeholder="Enter Phone" onkeypress="return (event.charCode != 8 && event.charCode === 0 ||(event.charCode >=48 && event.charCode <=57))" required>
                            <span class="text-danger d-block"><?=$sendNum_er?></span>
                        </div>
                    </div>
                    <div class="reciever-details">
                        <h5 class="fs-6 text-uppercase mt-5">Receiver Personal Details</h5>
                        <div class="form-group">
                            <input type="text" name="rec-name" id="" class="form-control" placeholder="Enter Full Name" required>
                            <span class="text-danger d-block"><?=$recName_er?></span>
                        </div>
                        <div class="form-group">
                            <input type="email" name="rec-email" id="" class="form-control" placeholder="Enter Email" required>
                            <span class="text-danger d-block"><?=$recEmail_er?></span>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="rec-phone" id="phone" class="form-control" placeholder="Enter Phone" required onkeypress="return (event.charCode != 8 && event.charCode === 0 ||(event.charCode >=48 && event.charCode <=57))">
                            <span class="text-danger d-block"><?=$recNum_er?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" id="" class="form-control" placeholder="Enter Address" required>
                            <span class="text-danger d-block"><?=$recAddress_er?></span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <a href="#" class="btn btn-danger btn-lg">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <script src="./js/admin.js"></script>
</body>
</html>