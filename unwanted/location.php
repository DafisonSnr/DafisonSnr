<?php
    require_once './config/config.php';
    $sql = mysqli_query($conn, "SELECT * FROM location WHERE id='1'");
    $fetch = mysqli_fetch_array($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="address" id="address" onchange="getCoordinates()">
        <input type="text" name="" id="lat">
        <input type="text" name="" id="long">
    </form>
  
    <div id="map" style="width: 100%; height: 500px"></div>
    <!-- access key: 2HTCUk9JvQ0fKCvf8Qyr7l5Z194CPYtdyKe-QTmoT3542D0Cwh1zG3mcNwcZYqbpshhs9XHxLkWZTLLAYN2_cg -->
    <script type="text/javascript">
        let lat = document.getElementById("lat");
        let long = document.getElementById("long");
        function getCoordinates(){
            var address = document.getElementById('address').value;
            var theUrl = "https://geocoder.ls.hereapi.com/search/6.2/geocode.json?languages=en-US&maxresults=4&searchtext=Deliveryservice" + address + "&apiKey=G8CzJRCR19ywBdhGF2tdajIJxIbpqCvXn9sNtS2deXA"
            var xlmHttp = new XMLHttpRequest();
            xlmHttp.open("GET", theUrl, false);
            xlmHttp.send(null);
            var json = JSON.parse(xlmHttp.responseText);
            console.log(json); 
            lat.value = json.Response.View[0].Result[0].Location.DisplayPosition.Latitude;
            long.value = json.Response.View[0].Result[0].Location.DisplayPosition.Longitude;
        }

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