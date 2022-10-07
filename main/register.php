<?php
    require_once './process.php';
    require_once './header.php';
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
    <title>STEEL SAFE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="users">dashboard</a>
            <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="register">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="signout.php">Sign Out</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled"
                    >Disabled</a
                >
                </li>
            </ul>
            </div>
        </div>
    </nav>
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
                            <input type="text" name="del-city" id="address" class="form-control" placeholder="Enter full Address for map locations" onchange="getCoordinates()" required>
                            <span class="text-danger d-block"><?=$delCity_er?></span>
                            <input type="hidden" name="latitude" id="lat">
                            <input type="hidden" name="longitude" id="long">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="weight" id="" class="form-control" placeholder="Enter Total Weight(10kg)" required>
                            <span class="text-danger d-block"><?=$weight_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="dimension" id="" class="form-control" placeholder="Dimensions(30cm) Optional" required>
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
                        <h4 class="text-uppercase text-primary">Expected Delivery Date and time Below</h4>
                        <div class="form-group col-md-6">
                            <input type="text" name="days" id="" class="form-control" placeholder="Enter Monday-Sunday">
                            <span class="text-danger d-block"><?=$days_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="del_date" id="" class="form-control" placeholder="Enter 5/10/2022 at 12:00 pm">
                            <span class="text-danger d-block"><?=$deliver_Date_er?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <p>Select In progress for a start below(),In transit means shipment on the way</p>
                            <select name="del_Status" id="" class="form-control">
                                <option value="" selected="selected">SELECT STATUS OPTIONS</option>
                                <option value="In Progress">In Progress</option>
                                <option value="In Transit">In Transit</option>
                                <option value="On Hold">On Hold</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                            <span class="text-danger d-block"><?=$del_Status_er?></span>
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