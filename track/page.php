<?php
    require_once './config/config.php';
    require_once 'header.php';

    $userRef = $_SESSION['tracking']['userRef'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE userRef='$userRef'");
    $fetch = mysqli_fetch_assoc($sql);
    $sqlShipment = mysqli_query($conn, "SELECT * FROM arrival WHERE userRef='$userRef' ORDER BY id DESC LIMIT 8");  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shipment Tracking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="bs/assets/img/favicon.ico" rel="icon">
  <link href="bs/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="bs/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bs/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="bs/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="bs/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="bs/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="bs/assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/page.css">

  <!-- Template Main CSS File -->
  <link href="bs/assets/css/main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- bootstrap icon and footer styling -->
    <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");
    
    /* footer style starts here */
    footer .footer-container{
        width: 100%;
        background-color:#0d237d;
        
    }
    footer .container-fluid{
        display: block;
        width: 100%;
    }
    footer .container-fluid ul{
        display: flex;
        padding: 0;
        margin: 0;
        
    }
    footer .container-fluid ul li{
        list-style: none;
    }
    footer .container-fluid ul li a{
        display: block;
        width: 100%;
        text-decoration: none;
        font-weight: bold;
        color: #fff;
        padding: 0 10px;
        font-size: 13px;
    }
    footer .container-fluid ul li a:hover{
        text-decoration: underline;
    }
    .dt-copyright{
        font-weight: bold;
        color: #fff;
        padding: 10px 0;
        margin: -90px 0 20px 0px;
        font-size: 13px;
    }
    .container-fluid .email a{
        display: inline-block;
        color: #fff;
        font-weight: bold;
        margin: -20px 0 40px 0;
    }
    @media only screen and (min-width:768px) {
        footer .container-fluid{
            display: flex;
            width: 100%;
            margin: 0 auto;
        }
        footer .container-fluid .email a{
            transform: translate(-20%,180%);
        }
    }
    @media only screen and (min-width:1200px) {
        footer .container-fluid{
            width: 1200px;
            margin: 0 auto;
        }
    }
    /* footer styling ends here */
  </style>

<!-- remove navbar background color on scroll -->
  <script defer>
     window.onscroll = function(){
      removeBackground()
    
    }
    function removeBackground(){
        var navbar = document.getElementById('navbar');
    
      if(
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop >20
      ){
        navbar.style.background = "none";
    
      }else{
        navbar.style.background = "black";
      }
    }

  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <h1>STEEL</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar fw-bold" style="background-color: #000;">
        <ul>
          <li><a href="../index" class="active">Home</a></li>
          <li><a href="../about">About</a></li>
          <li><a href="../network">Network</a></li>
          <li><a href="../career">Careers</a></li>
          <li><a href="../logistics">Security logistics</a></li>
          <li class="dropdown"><a href="#"><span>Security Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="../services">List of Services</a></li>
                  <li><a href="../products">Security Product</a></li>
                </ul>
              </li>
          <li><a href="../contact">Contact</a></li>
          <li><a class="get-a-quote" href="../get-a-quote">Get a Quote</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('bs/assets/img/page-header.jpg');">
       
      </div>
      <nav>
        <div class="container d-flex justify-content-between">
          <ol>
            <li><a href="../index">Home</a></li>
            <li>Contact</li>
          </ol>
          <div class="track">
              <form action="" method="post">
                  <input type="text" name="" id="trkNo" placeholder="Enter Tracking Number">
                  <span class="text-danger d-inline" id="trk_error"></span>
                  <button type="submit" class="btn btn-primary" id="sumbit_trkNo">Track</button>
              </form>
          </div>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div style="border:0; width: 100%; height: 340px;" id="map"></div>
      <!-- End Google Maps -->   
      <div class="container" data-aos="fade-up">        
        <!-- tracking history starts here -->
        <div class="container">
        <div class="row  mx-auto p-4">
            <div class="delivery-status">
                <div class="tracking_Id">
                    <h5>TRACKKNG ID</h5>
                    <p><?=$fetch['wayBilNo']?></p>
                </div>
                <div class="stutus">
                    <h5>DELIVERY STATUS</h5>
                    <p><?=$fetch['del_Status']?></p>
                </div>
                <div class="deliv_date">
                    <h5>SHEDULED DELIVERY</h5>
                    <p><?=$fetch['week']?></p>
                    <p style="font-size: 15px; margin-top: -18px;"><?=$fetch['deliver_date']?></p>
                </div>
            </div>
            <form action="" method="post">
              <div class="progress-container">
                <div class="progress-bar-container" onclick="clickProgress(document.getElementById('clickBtn').click())">
                  <div class="progress-bar" id="bar" onchange="proBAr(this)"></div>
                </div>
                <p style="font-size: 15px; font-weight: bold;" id="processing"><?=$fetch['del_Status']?></p>
                <div class="circle-indictor">
                
                  <div id="first"></div>
                  <div id="second"></div>
                  <div id="third"></div>
                  <div id="forth" >
                    <i class="fa-solid fa-check"></i>
                  </div>
                </div>
                <div class="airplane" id="jet" style="display: none;">
                  <!-- <i class="fa-solid fa-plane-departure"></i> -->
                  <img src="./img/plane.png" alt="Airplane">
                </div>
                <input type="hidden" name="" id="userRef" value="<?=$userRef?>">
                <input type="hidden"  id="clickBtn"value="">
              </div>
            </form>
            <div class="vertical-line-container">
            <div class="vertical-dotted-line"></div>
              <div class="history-container">
                <div class="arrivals">
                    <?php while($row = mysqli_fetch_assoc($sqlShipment)){?>
                      <ol reversed style="list-style: none;">
                       <div class="svg-spot">
                       <?php 
                        $MessageCheck = $row['heading'].$row['body'];
                        $hold = "/On Hold/i";
                        $checkMessage = preg_match_all($hold,$MessageCheck);
                        if(!$checkMessage){
                          echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 464c-114.69 0-208-93.31-208-208S141.31 48 256 48s208 93.31 208 208-93.31 208-208 208z"></path></svg>';
                        }else{
                          echo '
                          <svg style="color: red!important;" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 464c-114.69 0-208-93.31-208-208S141.31 48 256 48s208 93.31 208 208-93.31 208-208 208z"></path></svg>
                           <style>
                                
                           </style>
                          ';
                        }
                      ?>
                       </div>
                        <li>
                          <div class="list-style">
                            <h6><?=$row['heading']?> </h6><p><?=$row['body']?></p> <span class="list-span"><?=$row['time']?> <p><?=$row['date']?></p></span>
                          </div>
                        <li>
                      </ol>
                    <?php }?>
                </div>
                <div class="shipment-created" >
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 464c-114.69 0-208-93.31-208-208S141.31 48 256 48s208 93.31 208 208-93.31 208-208 208z"></path></svg>
                  <ol class="order-list-2" >
                    <li>
                      <div class="list-style-2">
                        <h6>Shipment Created </h6><p>Shipment Created At Service Center(<?=$fetch['city_Depart']?>)<span style="position: absolute;top: 0;color:green; font-size: 30px;"><i class="fa-regular fa-circle-check"></i></span></p> <span class="created-span"><?=$fetch['time']?> <p><?=$fetch['date']?></p></span>
                      </div>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="shipment-facts">
            <hr>
            <h3> Shipment facts</h3>
            <h5><span><i class="fa-solid fa-cube"></i></span> Shipment overview</h5>
            <table class="table table-striped table-hover">
              <tr>
                  <th>TRACKING NUMBER</th>
                  <td><?=$fetch['wayBilNo']?></td>
              </tr>
              <tr>
                  <th>SHIP DATE</th>
                  <td><?=$fetch['date']?></td>
              </tr>
              <tr>
                  <th>ACTUAL DELIVERY</th>
                  <td><?=$fetch['deliver_date']?></td>
              </tr>
              <tr>
                  <th>WEIGHT</th>
                  <td><?=$fetch['weight']?></td>
              </tr>
              <tr>
                  <th>RECIEVER'S NAME</th>
                  <td><?=$fetch['receiver_name']?></td>
              </tr>
              <tr>
                  <th>RECIEVER'S EMAIL</th>
                  <td><?=$fetch['receiver_email']?></td>
              </tr>
              <tr>
                  <th>SHIPMENT DESTINATION</th>
                  <td><?=$fetch['receiver_address']?></td>
              </tr>
              <tr>
                  <th>SHIPMENT REFERENCE</th>
                  <td><?=$fetch['ship_Ref']?></td>
              </tr>
            </table>
          </div>
        </div>
    </div>
    </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="w-100">
    <div class="footer-container">
        <div class="container-fluid">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ul-menu">
                <div class="region region-footer">
                    <section id="block-menu-menu-footer-menu" class="block block-menu clearfix">
                        <ul class="dt-foot-menu" style="margin-top: -40px"><li class="first leaf active-trail active"><a href="about-us" class="active-trail active">About us</a></li>
                            <li class="leaf"><a href="careers.html">Careers</a></li>
                            <li class="leaf"><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li class="last leaf"><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                        </ul>
                    </section> <!-- /.block -->
                </div>
                <div class="clearfix"></div>
                <p class="dt-copyright">© Copyright Steel Safe Security Company Express Limited. All Rights Reserved</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 email"> <a class="dt-mail-foot" href="mailto:support@steelsafesecuritycompany.com"><i class="glyphicon glyphicon-envelope"></i> support@steelsafesecuritycompany.com</a> </div>
        </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="bs/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bs/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="bs/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="bs/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="bs/assets/vendor/aos/aos.js"></script>
  <script src="bs/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="bs/assets/js/main.js"></script>

  <!-- Tracking JS FILE -->
  <script src="../assets/js/traking.js"></script>
  <!-- map functions -->
  <script>
    function initMap(){
      var location =  {lat: <?=$fetch['latitude']?>,lng: <?=$fetch['longitude']?>};
      var map = new google.maps.Map(document.getElementById("map"),{
          zoom: 4,
          center: location
      });
      var maker = new google.maps.Marker({
          position: location,
          map:map
      });
    }
   
  </script>
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeP-tL8kykFdZRAvCOW1-_dn3SHeAKy4U&&callback=initMap"></script>
</body>
</html>