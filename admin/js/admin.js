
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
