// shipment tracking number validation function
$(document).ready(function () {
    $("#sumbit_trkNo").click(function () { 
        let tracking_No = $("#trkNo").val();
        if(tracking_No == "") {
            $("#trk_error").html("Please enter Tracking Number")
        }else{
            $("#trk_error").html("");
            $.ajax({
                type: "POST",
                url: "process/process.php",
                data: {track:tracking_No},
                dataType: "json",
                success: function (response) {
                    if(response.status == 200){
                        window.location.href='./track/page';
                    }else{
                        alert("Invalid Tracking Id");
                    }
                }
            }); 
        }
    });
});

// Shipment transition status
$("#clickBtn").click(function (e) { 
    e.preventDefault();
    let userRef = $("#userRef").val();
    $.ajax({
        type: "post",
        url: "../process/check.php",
        data: {userRef:userRef},
        dataType: "json",
        success: function (response) {
            if(response.status == 200){
                move()
            }else if(response.status === "moving"){
                move2();
            }else if(response.status == "hold"){
                move3();
            }
            else if(response.status == "available"){
                move4();
            }
            else{
                alert(response.status)
            }
            
        }
    });

});

// shipment progress bar in progress status
let i = 0;
function move(){
    if(i == 0){
        i = 1;
        let barElement = document.getElementById("bar");
        let width = 10;
        let timeOut = setInterval(moveElemnt, 10);
        function moveElemnt(){
            if(width >=100){
                clearInterval(timeOut);
                i = 0
            }else{
                width ++;
                barElement.style.width = width + "%";
                if(width == 32){
                    clearInterval(timeOut);
                    let second = document.getElementById("second")
                    second.style.backgroundColor = "green";
                }
            }
        }
    }
}
// shipment progress bar in transit
function move2(){
    if(i == 0){
        i = 1;
        let barElement = document.getElementById("bar");
        let width = 35;
        let timeOut = setInterval(moveElemnt, 10);
        function moveElemnt(){
            if(width >=100){
                clearInterval(timeOut);
                i = 0
            }else{
                width ++;
                barElement.style.width = width + "%";
                if(width == 70){
                    clearInterval(timeOut);
                    let status = document.getElementById("processing");
                    status.style.marginLeft = "150px";
                    let second = document.getElementById("second")
                    second.style.backgroundColor = "green";
                    let third = document.getElementById("third");
                    third.style.backgroundColor = "green";

                    let plane = document.getElementById("jet");
                    plane.style.display = "block";
                }
            }
        }
    }
}

// shipment progress bar on hold 
function move3(){
    if(i == 0){
        i = 1;
        let barElement = document.getElementById("bar");
        let width = 35;
        let timeOut = setInterval(moveElemnt, 10);
        function moveElemnt(){
            if(width >=100){
                clearInterval(timeOut);
                i = 0
            }else{
                width ++;
                barElement.style.width = width + "%";
                if(width == 70){
                    clearInterval(timeOut);
                    let status = document.getElementById("processing");
                    status.style.marginLeft = "150px";
                    status.style.color = "red";
                    let second = document.getElementById("second")
                    second.style.backgroundColor = "red";
                    let third = document.getElementById("third");
                    third.style.backgroundColor = "red";
                    var first = document.getElementById("first");
                    first.style.backgroundColor = "red";
                    let plane = document.getElementById("jet");
                    plane.style.display = "block";

                    barElement.style.backgroundColor = "red"
                }
            }
        }
    }
}
// shipment progress bar available for pickup
function move4(){
    if(i == 0){
        i = 1;
        let barElement = document.getElementById("bar");
        let width = 35;
        let timeOut = setInterval(moveElemnt, 10);
        function moveElemnt(){
            if(width >=100){
                clearInterval(timeOut);
                i = 0
            }else{
                width ++;
                barElement.style.width = width + "%";
                if(width == 100){
                    clearInterval(timeOut);
                    let status = document.getElementById("processing");
                    status.style.marginLeft = "230px";
                    let second = document.getElementById("second")
                    second.style.backgroundColor = "green";
                    let third = document.getElementById("third");
                    third.style.backgroundColor = "green";
                    var first = document.getElementById("first");
                    first.style.backgroundColor = "green";
                    var first = document.getElementById("forth");
                    forth.style.backgroundColor = "green";
                    let plane = document.getElementById("jet");
                    plane.style.display = "none";

                    barElement.style.backgroundColor = "green"
                }
            }
        }
    }
}
//  progress bar click function; 
 $(document).ready(function () {
    $("#clickBtn").click();
 });



//  

