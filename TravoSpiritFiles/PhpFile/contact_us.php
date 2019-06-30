<!DOCTYPE html>
<html>
<head>
	<title>TravoSpirit</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="shortcut icon" type="image/png" href="logo.png"">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Mali:400,700|Montserrat" rel="stylesheet">

        <!--<link rel="stylesheet" type="text/html" href="only_navbar.html">-->
    <style>

		.nav1{
	    font-family: 'Montserrat', sans-serif;
	    font-size: 16px;
    	font-weight: 400;
    	color:#ffffff;
    	text-decoration: none !important;
    	padding-left: 40px;
	}
			a:hover{
		color:#fe435b;
	}
	a:active{
		color:#fe435b;
		border-bottom: 5px;
		border-color: #fe435b;
	}
	.dropdown {
    position: relative;
    display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color:#cfcfd1 ;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            color:#000000;
        }
        .Search,.tours{
            font-family: 'Montserrat', sans-serif;
        }
        .dropdown-content a {
            color: #ffffff;
            padding: 12px 16px 10px;
            text-decoration: none;
            display: block;
            font-family:'Montserrat', sans-serif; 
        }
        .dropdown:hover .dropdown-content {display: block;}

                .foot_ul{
                    list-style: none;
                    text-decoration: none;   
                    list-style-type: none;
                }
                .foot_ul a{
                    text-decoration: none;
                    color:black;
                }
                #foot_tbl   {
                    table-layout: fixed;
                    width:100%;
                }
                .tbl_col{
                    width: 25%;
                }
                #foot{
                    background-color: #131a2f;
                    color: #ffffff;
                    

                }


                #foot_pre{
                    background: transparent;
                    border: none;
                    font-size: 15px;
                }
                .link{
                    color: #ffffff;
                }
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        #map {
                text-align:center;
                height: 550px;  /* The height is 400 pixels */
                width: 1000px;
                margin-top:80px;
                margin-left: 130px;
                margin-bottom: 60px;
                z-index: 0;
                box-shadow: 10px 10px 5px rgba(0, 0, 0, .2);
                  /* The width is the width of the web page */
             }
              


        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        * {
            box-sizing: border-box;
        }
        .one{
            background-repeat: no-repeat;
            width: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        #top{
                background: linear-gradient(to right, #8360c3 10%, #2ebf91 100%);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat; 
                padding-top: 20px;
                height: 100%;
                width: 100%;
        }
</style>
</head>
<body style="margin: 0; overflow-x: hidden;">
    <div id="top" style="margin: 0;">
 <div class="navbar1" style=" position:relative; margin-top:20px; padding-left: 40px; padding-right: 60px;margin-right:40px; margin-left:40px; background-color: #131a2f; height:120px; z-index: 999;">

          <div style="float:left;padding-top: 20px;">
            <div style="float:left"><img src="logo.png"></div>
            <div style="float:right;font-family: 'Montserrat', sans-serif; color:#ffffff;"><h2>TRAVOSPIRIT</h2></a>
              <p style="margin-top: -22px; font-weight: 10px; color: #c9cfd8; padding-left: 10px;">Travel Agency</p></div>

            </div>
            <div style="padding-top: 50px;">
              <div style="float:left;padding-left: 150px;">
                <a  class="nav1" href="index_n.html">Home</a>
                <a  class="nav1" href="AboutUs.html">About Us</a>
                <a  class="nav1" href="Blog.html">Blogs</a>
                <a  class="nav1" href="holidays.html">Holidays</a>
                <a  class="nav1"  href="contact_us.html">Contact Us</a>
                <a  class="nav1"  href="Emergency.html">Emergency Contacts</a>
                 
                
              </div>
            </div>
          </div>
       


        

    
    
   
<div id="map"></div>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdx_5p5Y17Xo1rfovONEvvOC6LtpQzNOM&#038  &callback=initMap">
    </script>

    <div style="background-color:#131a2f ;width: 100%; height: 120px; padding-top: 5px; margin-bottom:-34px;  padding-bottom: 0">
    <center><h2 style="color: #ffffff; font-size: 250%; padding-left: 20px; font-family: 'Montserrat', sans-serif !important; font-weight: 200;
">Have a Question ? Contact us: +91 22 43001234</h2></center>
    
    </div>
    <div class="one" style=" background: linear-gradient(to right, #a1ffce 10%, #faffd1 100%);">
    <h2 style="color:#131a2f; padding-top: 20px; font-weight: 550; font-size:40px; padding-left: 20px;" ><i>Get in touch</i></h2>
    <table style="width: 100%; margin-left: 100px; font-size: 120%;"> 
        <tr>
            <th>
            <table style=" font-weight: 555;">
                <tr>
                    <td><i class="material-icons" style="font-size:34px;color:#fe435b;">local_phone</i></td>
                    <td> +91 22 43001234</td>
                </tr>
                <tr>
                    <td><i class="material-icons" style="font-size:34px; color:#fe435b;">place</i></td>
                    <td style="padding-left: 20px;">No 303-305, 3rd Floor, M L Space, D J Road,<br>
                    Station Road, Vile Parle West,<br>Mumbai – 400056.</td>
                </tr>
                <tr>      
                    <td>
                        <i class="material-icons" style="font-size:34px; color: #fe435b;">local_post_office</i>
                    </td>
                    <td>travospirit.123@gmail.com</td>
                </tr>
            </table>

            </th>
            <th style="margin-left: 100px !important; text-align: left;">
                <form method="POST" action="">
                    <h3 style="color:#131a2f; font-size:34px; font-weight: 300; margin-bottom: 0px; padding-left: 50px;">Send us a message</h3>
                    <hr style="background-color:#fe435b; width:10%; height:5px; border:none; margin-bottom: 34px;margin-left: 170px;">
                    
                    <input style="width: 200px; height:41px;" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">

                    <input style="width: 200px; height:41px; margin-left: 5px;" name="emailIdOfPerson" type="text" placeholder="xyz@gmail.com" required="required" data-error="Email is required."><br>
                    
                    <input style="width: 410px; height:41px; margin-top: 10px;" name="subjectForEmail" type="text" placeholder="Subject" required="required" data-error="Subject is required."><br>

                    <textarea style=" font-family: 'Montserrat', sans-serif; margin-top: 10px; width:410px; color:#717172;" name="messageForEmail" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea><br>
                    
                    <button style="background-color:#fe435b; margin-top: 10px; color: #ffffff; height:41px; width:150px; margin-bottom:20px; margin-left: 150px; text-decoration: none; border: none;" onclick = "sendEmail()" >Send Message</button>
                
                </form>   
            </th>
        </tr>
    </table>
    </div>

   
    <script type="text/javascript">
        
        var modal = document.getElementById('myModal1');

        // Get the button that opens the modal
        var btn = document.getElementById("id01");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var uluru = {lat: 19.1071059 , lng:  72.8349187};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 17, center: uluru});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        }

        function sendEmail(){
            alert("<?php
                        $emailId = $_POST['emailIdOfPerson'];
                        $subject = $_POST['subjectForEmail'];
                        $message = "Received Query From " . $emailId . ", \n" . $_POST['messageForEmail'];
                        $myEmailId = "travospirit.123@gmail.com";

                        if(mail($myEmailId,$subject,$message)){
                            echo " Mail received successfully. " ;
                        }else{
                            echo " Mail not received. ";
                        }

                ?>");
        }
  
    </script>
    
   <footer id="foot" style="font-family: 'Montserrat', sans-serif;"> 
          <table id="foot_tbl">
            <tr>
              <td class="tbl_col">
                <ul class="foot_ul">
                  <li><h1 style="color: #ffb20c;">About Us</h1></li>
                  <p>It all began in the year 1987, when two visionaries met, in a very humble way. Shri Jitendra N. Shah, from the traditional Gujrati Trading Community,<span><a style="color: #ffb20c;" href="AboutUs.html">Read More</a></span></p>
                </ul>
              </td>
              <td class="tbl_col" style="text-align: center;">
                <br>
                <form action="#">
                  <h4 style="font-size: 120%; font-family: Raleway;">GUEST SPEAKS:</h4>
                  <p><i>"Travelling to Darjeeling through Travospirit was a great pleasure. <br>Came back with cherishable memories. A Big Thank you for <br>all your guidance."</i></p>
                  <i style="font-size: 130%; color: #c1bcb2;">Please help us serve you better:</i>
                  <br>

                  <br>
                  <button type="button" style="background-color: #ffb20c; border: none; height: 30px; width: 100px; color: #ffffff;" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdhJdC3QSnQXcGqNVUphUSBgOCqUddKaMcoryJEI6m7BkW8nw/viewform'" ><b>Feedback</b></button>
                </form>
                <br>
              </td>

              <td class="tbl_col">
                <h1 style="color: #ffb20c;">Contact Us</h1>
                <p>No 303-305, 3rd Floor, M L Space,
                  D J Road,<br>Station Road,
                Vile Parle West, Mumbai – 400056.</p>
                <br>
                <ul class="foot_ul" style="margin-right: 150px;">
                  <li><i class="fab fa-facebook-f"></i>  <a style="color: #ffffff" href='#'>Facebook</a></li>
                  <br>
                  <li><i class="fab fa-instagram"></i>  <a style="color: #ffffff;"  href='#'>Instagram</a></li>
                  <br>
                  <li><i class="fab fa-twitter"></i>  <a style="color: #ffffff;" href='#'>Twitter</a></li>
                </ul>
              </td>
            </tr>
          </table>
        </footer>

</body>