
let fileUpload = document.getElementById('dpUploaded');
const preview = document.getElementById('uploadForm');
function showPhoto(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#preview')
          .attr('src', e.target.result)
          .width(150)
          .height(200);
      };
      reader.readAsDataURL(input.files[0]);
    }
}

function limit(element){
  inputLength = 30;
  if(element.value.length > inputLength) {
    element.value = element.value.substr(0, inputLength);
  }
}
function limit_message(element){
  if(element.value.length >  70) {
    element.value = element.value.substr(0,70);
  }
}



// function get latitude and longitude
function getCoordinates(){
  var address = document.getElementById('address').value;
  var theUrl = "https://geocoder.ls.hereapi.com/search/6.2/geocode.json?languages=en-US&maxresults=4&searchtext=Deliveryservice" + address + "&apiKey=G8CzJRCR19ywBdhGF2tdajIJxIbpqCvXn9sNtS2deXA"
  var xlmHttp = new XMLHttpRequest();
  xlmHttp.open("GET", theUrl, false);
  xlmHttp.send(null);
  var json = JSON.parse(xlmHttp.responseText);
  console.log(json); 
  document.getElementById("lat").value = json.Response.View[0].Result[0].Location.DisplayPosition.Latitude;
  document.getElementById("long").value = json.Response.View[0].Result[0].Location.DisplayPosition.Longitude;
}  
