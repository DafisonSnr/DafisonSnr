$(document).ready(function () {
    $("#sumbit_trkNo").click(function () { 
        let tracking_No = $("#trkNo").val();
        if(tracking_No == "") {
            $("#trk_error").html("Please enter Tracking Number")
        }else{
            $("#trk_error").html("");
            $.ajax({
                type: "POST",
                url: "./process/process.php",
                data: {track:tracking_No},
                dataType: "json",
                success: function (response) {
                    if(response.status == 200){
                        window.location.href='./trak/page.php';
                    }else{
                        alert("Invalid Tracking Id");
                    }
                }
            }); 
        }
    });
});