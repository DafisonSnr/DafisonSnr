<?php
    require_once "./../config/config.php";
    require_once "./process.php";
    if(isset($_POST['submitSearch'])){
        $search = $_POST['search'];
    }else{
        $search = "";
    }
    

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
    <title>Document</title>
    <style>
        @media(min-width: 375px) {
            .row .form-container{
                width: 70%;
                margin: 20px auto;
            }
        }
        @media(min-width: 768px) {

            .row .form-container{
                float: left;
                width: 20%;
                margin: 0 20px 0 70px;
            }
        }
        
        .users-container .row .search form{
            margin: 20px 50px;
        }
    </style>
</head>
<body>
    <div class="show-user-profiles">
        <div class="container-phluid users-container">      
            <div class="row">
                <!-- delete quer -->
                <?php if(isset($_GET['delete'])){
                    $deleteId = base64_decode($_GET['delete']);
                ?>
                    <form action="" method="post">
                        <input type="hidden" name="deleteId" value="<?php echo $deleteId; ?>" />
                        <div class="alert alert-light shadow-lg w-50 mx-auto p-4 mt-5">
                            <p>Are You Sure?</p>
                            <input type="submit" name="yes" id="" class="btn btn-danger btn-sm" value="YES">
                            <a href="users.php" class="btn btn-primary btn-sm">NO</a>
                        </div>
                    </form>
               <?php }else{?>
                    <!-- update shipment history query -->
                    <?php if(isset($_GET['update_history'])){
                        $userRef = base64_decode($_GET['update_history']);
                        ?>
                        <form action="" method="POST" class="shadow-lg mx-auto w-50 bg-light p-4 mt-5">
                            <input type="hidden" name="userRef" value="<?=$userRef?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="dept"  id="" class="form-control w-100" placeholder="Departs/Arrived From" onkeyup="limit(this)" onkeypress="limit(this)">
                                    <span class="text-danger d-block"><?=$dept_er?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="message" id="" class="form-control w-100" placeholder="Shipment Depart/Arrived..." onkeyup="limit_message(this)" onkeypress="limit_message(this)">
                                    <span class="text-danger d-block"><?=$message_er?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="time" id="" class="form-control" placeholder="Enter Time(05:38 PM)">
                                    <span class="text-danger d-block"><?=$time_er?></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="date" id="" class="form-control" placeholder="Enter Date(20 Aug,2022)">
                                    <span class="text-danger d-block"><?=$date_er?></span>
                                </div>
                            </div>
                            <div class="form-group">
                            <a href="users.php" class="btn btn-danger btn-sm">Cancel</a>
                            <button type="submit" name="ship-depart" class="btn btn-primary btn-sm">SUBMIT</button>
                            </div>
                        </form>
                    <?php }else{?>
                        <div class="form-row">
                            <div class="form-group col-md-8 search">
                                <form action="" method="post">
                                    <input type="text" name="search" id="" placeholder="Search by Name" value="">
                                    <button class="btn btn-primary btn-sm" type="submit" name="submitSearch">Search</button>
                                </form>
                            </div>
                        </div>
                        <?php 
                        $input = $search;
                        $sqlSelect = mysqli_query($conn,"SELECT * FROM users WHERE sender_name LIKE '%$input%'");
                        if(mysqli_num_rows($sqlSelect)<1){?>
                            <div class="container">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <td class="text-danger">NO CUSTOMER HAS BEEN ADDED YET</td>
                                    </tr>
                                </table>
                            </div>
                        <?php }else{?> 
                            <?php
                            while($row = mysqli_fetch_assoc($sqlSelect)) :?>
                                <div class="shadow-lg mt-5 p-4 form-container">
                                    <h4 class="text-danger text-center" style="font-size: 12px">UPDATE SHIPMENT HISTORY</h4>
                                    <div class="image">
                                        <img src="./../admin/<?=$row['senderPhoto']?>" alt="" style="width: 50%; margin-bottom: 8px;">
                                    </div>
                                    <h6 class="text-primary"><?=$row['sender_name']?></h6>
                                    <h4 class="fs-6">Tracking No: <?=$row['wayBilNo']?></h4>
                                    <input type="hidden" name="userRef" id="" value="<?=$row['userRef']?>">
                                    <div class="form-group">
                                        <a href="?update_history=<?=base64_encode($row['userRef'])?>" type="submit" class="btn btn-primary btn-sm">Update</a>
                                    </div>
                                    <div class="delete text-right">
                                        <h6 class="text-uppercase">Delete User</h6>
                                        <a href="?delete=<?=base64_encode($row['userRef'])?>" class="btn btn-danger btn-sm">DELETE</a>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        <?php }?>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html>