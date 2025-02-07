<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CSPIT - <?=$data['name_of_dept']?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  
  
  
  <style>
        /*we need to style the popup with CSS so it is placed as a common popup does*/
   /*Homepage Popup CSS Start */
   #popup {
            display:none;
            position:absolute;
            margin:0 auto;
            padding: 50px 10px 10px 10px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            border-width: 5px;
            border-style: double;
            border-color: black;
            background-color: white;
    }
    /*Homepage Popup CSS Ends*/
    </style>
</head>
<body id="body">
    
<!-- let's call the following div as the POPUP FRAME -->
<!--<div id="popup" style="text-align:center";>

    <!-- <h6 style="text-align:center">Webinars on Information Security</h6>
    <h6 style="text-align:center">(Jointly organized by CHARUSAT & CITY, University of London, UK</h6>
    <a href="#" target="_Blank"><strong>CONGRATULATION!<br>Mr. Hardev Khandhar</strong></a><br><br>
    <!-- and here comes the image -->
    
    <!--<img src="../ce/img/Student1.jpg" alt="popup">-->

        <!-- Now this is the button which closes the popup-->
       
     <!--<br><br><p style="text-align:center;"><button id="close" style="padding:0px 10px 0px 10px; border-bottom: 5px solid #1C6EA4; border-radius: 20px 20px 20px 20px;">Close button</button></p>

        <!-- and finally we close the POPUP FRAME-->
        <!-- everything on it will show up within the popup so you can add more things not just an image -->
 <!-- </div>-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
//your jquery script here
//with this first line we're saying: "when the page loads (document is ready) run the following script"
$(document).ready(function () {

    //select the POPUP FRAME and show it
    $("#popup").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(1000);
    });

});
</script>

<!-- Popup Ends -->
    
<script type="text/javascript"> var npf_d='https://charusat.nopaperforms.com'; var npf_c='466'; var npf_m='1'; var s=document.createElement("script"); s.type="text/javascript"; s.async=true; s.src="https://track.nopaperforms.com/js/track.js"; document.body.appendChild(s); </script>
<!-- Modal Admission Form -->
	<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel2" style="text-align:center;">Admissions Inquiry Form</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="npf_wgts" data-height="510px" data-w="597831ba0d2e61c094e77bb4aaab1d22"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- modal -->
    
<!-- Admission Button-->
<!--<div id="mySidenav" class="sidenav">
  <a class="admission" href="#myModal2" data-toggle="modal" id="inquiry">Admission Inquiry</a>
  <a class="admission" href="https://charusat.nopaperforms.com/" id="application-form" target="_blank">Application Form</a>
</div>
<div id="mySidenav" class="sidenav">
  <a class="vt" href="http://117.239.83.200:8110/CHARUSAT_Virtual_Tour/CSPIT/" id="view360" target="_blank">360&#176; Virtual Tour &nbsp;&nbsp;<i class="fa fa-video-camera"></i></a>
</div>-->