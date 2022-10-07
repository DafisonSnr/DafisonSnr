
<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
  <title>Google Maps API Geocoding Demo</title> 
  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false"
          type="text/javascript"></script> 
</head> 
<body onunload="GUnload()"> 

  <div id="map_canvas" style="width: 400px; height: 300px"></div> 

  <script type="text/javascript"> 

    // Prepare this list from ColdFusion
    var locations = [
       'New York, NY',
       'Los Angeles, CA',
       'Chicago, IL',
       'Houston, TX',
       'Phoenix, AZ'
    ];

    if (GBrowserIsCompatible()) {
       var map = new GMap2(document.getElementById("map_canvas"));

       var geocoder = new GClientGeocoder();
       var index = 0;

       var geocoderFunction = function () { 
          geocoder.getLatLng(locations[index], function (point) {    
             if (point) {
                map.addOverlay(new GMarker(point));                
             }

             // Call the geocoder with a 100ms delay
             index++;
             if (locations.length > index) {
                setTimeout(geocoderFunction, 100);
             }
          });
       }

       map.setCenter(new GLatLng(38.00, -100.00), 3);

       // Launch the geocoding process
       geocoderFunction();
    }
  </script> 
</body>
</html>