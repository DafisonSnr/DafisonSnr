<?php
    require_once '../config/config.php';
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE wayBilNo='STF530626'");
    // STF611984
    // STF3682855
    // STF9570569
    $fetch = mysqli_fetch_assoc($sql);
    $userRef = $fetch['userRef'];
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
  <link href="bs/assets/img/favicon.png" rel="icon">
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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>STEEL SAFE</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          </li>
          <li><a href="contact.html" class="active">Contact</a></li>
          <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li>
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
            <li><a href="index.html">Home</a></li>
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
            <!-- tracking history starts here -->
      <div class="container">
        <div class="row  p-4">
          <div class="delivery-status">
            <div class="tracking_Id">
              <h5>TRACKKNG ID</h5>
              <p><?=$fetch['wayBilNo']?></p>
            </div>
            <div class="stutus">
              <h5>DELIVERY STATUS</h5>
              <p><?=$fetch['del_Status']?></p>
            </div>
            <div class="delivery_date">
              <h5>SHEDULED DELIVERY</h5>
              <p>Monday</p>
              <p style="font-size: 15px; margin-top: -18px;">5/10/2020 at <span>04:55 pm</span></p>
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
                        <h6>Shipment Created </h6><p>Shipment Created At Service Center(<?=$fetch['city_Depart']?>)<span style="position: absolute;top: -5px; left:70%;color:green; font-size: 25px;"><i class="fa-regular fa-circle-check"></i></span></p> <span class="created-span"><?=$fetch['time']?> <p><?=$fetch['date']?></p></span>
                      </div>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="shipment-facts">
            <hr class="" >
            <h3> Shipment facts</h3>
            <h5><span><i class="fa-solid fa-cube"></i></span> Shipment overview</h5>
            <table class="table table-striped table-hover">
              <tr>
                <th>TRACKING NUMBER</th>
                <td>1111111111</td>
              </tr>
              <tr>
                <th>SHIP DATE</th>
                <td>05/10/2022</td>
              </tr>
              <tr>
                <th>ACTUAL DELIVERY</th>
                <td>05/10/2022</td>
              </tr>
              <tr>
                <th>WEIGHT</th>
                <td>100KG</td>
              </tr>
              <tr>
                <th>RECIEVER'S NAME</th>
                <td>LYDIA</td>
              </tr>
              <tr>
                <th>RECIEVER'S EMAIL</th>
                <td>LYDIA</td>
              </tr>
              <tr>
                <th>RECIEVER'S ADDRESS</th>
                <td>London STREET UK SCOTLAN</td>
              </tr>
              <tr>
                <th>SHIPMENT REFERENCE</th>
                <td>STX444444444444</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Logis</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
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