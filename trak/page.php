<?php
    require_once './config/config.php';
    require_once 'header.php';

    $userRef = $_SESSION['tracking']['userRef'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE userRef='$userRef'");
    $fetch = mysqli_fetch_assoc($sql);
    $sqlShipment = mysqli_query($conn, "SELECT * FROM arrival WHERE userRef='$userRef' LIMIT 6");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/page.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row  mx-auto p-4">
            <div class="vertical-line-container">
                <div class="vertical-dotted-line"></div>
                <?php while($row = mysqli_fetch_assoc($sqlShipment)){?>
                    <div class="spot2">
                        <?php 
                            $MessageCheck = $row['heading'];
                            $hold = "/On Hold/i";
                            $checkMessage = preg_match($hold,$MessageCheck);
                            if(!$checkMessage){
                                echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 464c-114.69 0-208-93.31-208-208S141.31 48 256 48s208 93.31 208 208-93.31 208-208 208z"></path></svg>';
                            }else{
                                echo '<svg style="color: red!important;" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 464c-114.69 0-208-93.31-208-208S141.31 48 256 48s208 93.31 208 208-93.31 208-208 208z"></path></svg>';
                            }
                        ?>
                        <div class="shipments">
                            <h5><?=$row['heading']?></h5>
                            <p><?=$row['body']?></p>
                        </div>
                        <div class="date">
                            <div class="date-container">
                                <h5><?=$row['time']?></h5>
                                <h6><?=$row['date']?></h6>
                            </div>
                        </div>
                    </div>
               <?php }?>
                <div class="spot">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 464c-114.69 0-208-93.31-208-208S141.31 48 256 48s208 93.31 208 208-93.31 208-208 208z"></path></svg>
                    <div class="shipments">
                        <h5>Shipment Created</h5>
                        <p>Shipment Created At Service Center(<?=$fetch['city_Depart']?>)</p>
                    </div>
                    <div class="date">
                        <div class="date-container">
                            <h5><?=$fetch['time']?></h5>
                            <h6><?=$fetch['date']?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>