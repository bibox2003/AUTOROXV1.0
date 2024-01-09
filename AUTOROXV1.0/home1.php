<?php
session_start();
echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<script src="script.js"></script>
	 <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	 <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	 </head>
	<style type="text/css">*{text-decoration: none;}
		th.k2{
			background-color: #FBE0C3;
			border-radius: 14px;
			position: fixed;
             top: 0;
            left: 0;
            right: 0;
            width: 100%;
             z-index: 9999;
             height: 100px;
		
		}
		.img{
       margin-top: 1%;
			float: left;
			margin-left: 3%;
		}
		a{
          padding: 10px 20px;
          font-size: 20px;
          float: right;
          margin-right: 3%;
          color: black;
          text-align: center;
          margin-top: 2%;
         }
         a:hover {
          color: burlywood;
        }
        td.w1{
        	background-color: #2D3E4E;
        	position: fixed;
        	right: 0;
        	left: 0;
        	width: 100%;
        	z-index: 9999;
        	height: 40px;
        	top: 18%;
        }
        a.w12{
        	padding: 10px 10px;
          font-size: 20px;
          float: right;
          margin-right: 5%;
          color: black;
          text-align: center;
          margin-top: 0;
        }
       a:hover{
       	 color: burlywood;
       }
       .img{
          float: left;
			margin-left: 3%;

		}
		.slideshow-container:slide{
			display: none;
		}
		img.slide{
			margin-right: 5%;
			max-width: 100%;
  height: 100%;
  top: 0;
  background-color: rgba(0, 0, 0, 0.5);
    z-index: -1;
     overflow: hidden;
     margin-top: 12%;
   
  }
  h1.h1{
			position: relative;
			text-align: center;
			font-family: "Open Sans", sans-serif;;
			top: 0;
			size: 8px;
}
.container{
	 display: block;
}
.container .caption {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: Arial, sans-serif;
      font-size: 20px;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
    }
    p.fd{
    	font-family: "Open Sans", sans-serif;
  font-size: 23px;
  line-height: 1.5;
  text-align: justify;
  padding: 2px;
      
    }
    button.n1{
			 background-color: #555;
  text-align: center;
  width: 170px;
  height: 50px;
  position: absolute;
  top: 1020px;
  right: 3%;
  border-radius: 10px;
  cursor: pointer;
  font-size: 17px;
  display: block;
			padding: 2px;
			font-family: arial,sans-serif;
			 cursor: pointer;
             float: none;
             
  
            
            
		}
		.n1:hover{
			background-color: #2D3E4E;
		}
		.line {
  border-top: 4px solid black;
  width: 700px;
  
   transform: translate(-50%, -50%);
  justify-content: center;
}
		img.kj{
			margin-left: 3%;
		}
		table.jk{
			
		}
		button.n12{
			 background-color: #555;
  text-align: center;
  width: 170px;
  height: 50px;
  position: absolute;
  right: 29%;
  border-radius: 10px;
  cursor: pointer;
  font-size: 17px;
  display: block;
			padding: 2px;
			font-family: arial,sans-serif;
			 cursor: pointer;
             float: none;
		}
		.n12:hover{
			background-color: #2D3E4E;

		}
		button.n13{
			 background-color: #555;
  text-align: center;
  width: 170px;
  height: 50px;
  position: absolute;
  right: 60%;
  border-radius: 10px;
  cursor: pointer;
  font-size: 17px;
  display: block;
			padding: 2px;
			font-family: arial,sans-serif;
			 cursor: pointer;
             float: none;
		}
		.n13:hover{
			background-color: #2D3E4E;

		}
		p.mn{
			font-family: Stencil Std, fantasy;
			font-size: 40px;
		}
		button.w6{
			background-color:   #555;
			width: 60px;
			height: 60px;
			display: block;
			padding: 10px;
			font-family: arial,sans-serif;
			 cursor: pointer;
             float: none;
             position: relative;
             top: 5;
             right: 0;
            width: 100%
             
             }
             li.bv{
             	font-family: sans-serif;
             	font-size: 0px;
  line-height: 1.5;
  text-align: justify;
  padding: 2px;
             }
              a.w13{
        	padding: 10px 10px;
          font-size: 18px;
          float: right;
          margin-right: 5%;
          color: black;
          text-align: center;
          margin-top: 0;
        }
       a:hover{
       	 color: burlywood;
       }
       td.l{
       	background-color: burlywood;
       }

	</style>
<body>
  <table >
  	<tr><th class="k2"><img  class="img" src="pictures/t1.png" width="20%" height="80px">
  		<a href="contact.php">Contact Us</a>
				<a href="https://mapcarta.com/Search?q=sp+gas+station">maps</a>
				<a href="others.html">Internet tracking</a>

          	</th></tr>
  	<tr><td class="w1">
  		<a class="w12"  href="profile.php"><i class="fa-solid fa-user"></i>Vehicle profile</a>
  		<a class="w12" href="payment.php"><i class="fa-solid fa-file-invoice"></i>Payment</a>
			<a class="w12" href="maitra.php"><i class="fa-solid fa-screwdriver-wrench"></i>Maintance tracking</a>
			       <a class="w12" href="koma.php"><i class="fa-solid fa-car"></i>Cars</a>

		  <a class="w12" href="fueltracking.php"><i class="fa-solid fa-gas-pump"></i>Fuel managements</a>
			<a class="w12" href="home1.php"><i class="fa-solid fa-house"></i>Home</a>
  	</td></tr>
  </table><br/>
  <table  class="sd" height="350px" width="100%">
  	<tr><td >
  			<img class="slide" src="pictures/da1.jpg" alt="Image 1">
               <img class="slide" src="pictures/fuel.jpg" alt="Image 2">
               <img class="slide" src="pictures/mai.jpg" alt="Image 1">
               <img class="slide" src="pictures/pay.jpg" alt="Image 2">
               <img class="slide" src="pictures/pro12.jpg" alt="Image 2">
  	</td></tr>
  </table>
 
  <h1 class="h1"><b>CHECK UP</b></h1>
  <table class="jk"  height="320px" width="100%">
  	<tr><td width="25%">
  		<img class="kj"  src="pictures/apply.jpg" width="80%" height="80%">
  	</td><td  width="50%">
  		<div class="caption">
  		<p class="fd">AUTO ROX provides a sophsticated interface 
					which allows users to apply for general checkup
					at RNP station and also time to come pick up after
					your has been checked up rather than being on the waitlist</p>
    <button class="n1"><a   href="https://irembo.gov.rw/user/citizen/service/rnp/motor_vehicle_inspection">APPLY </a></button>
    <button class="n12">More </a></button>
  	</td></tr>
  </table>
  <h1 class="h1"><b>INSURANCE</b></h1>
  <table class="jk"  height="320px" width="100%">
  	<tr><td width="50%">
  		<p class="fd"> Our user-friendly interface puts you in control, allowing you to effortlessly keep track of your insurance details and policy documents. Never miss a payment or renewal deadline again, as our app sends you timely reminders to ensure you stay protected at all times.But that's just the beginning.</p>
    <button class="n1"><a   href="https://irembo.gov.rw/user/citizen/service/rnp/motor_vehicle_inspection">APPLY </a></button>
    <button class="n13">More </a></button>
  		
  	</td><td  width="25%">
  		<img class="kj"  src="pictures/insu1.jpg" width="80%" height="80%">
  	</td></tr>
  </table>
  <table   height="300px" width="100%">
  	<tr><td width="">
  		<p class="mn"><b>TRACK-MAINTANANCE</b></p>
  	</td><td width="50%">
  		<video width="100%" height="80%" src="pictures/vivo.mp4" controls></video>
  	</td>
  	<td>
  		 <h2 class="h1">QUICK LINKS </a></h2>
  		 <ul>
  		 	<li class="bv"><a class="w13"  href="https://police.gov.rw/services/automobile-inspection/">Rwanda National police</a> </li>
  		 	<li class="bv"><a class="w13"  href="signup.html">Rwanda transpotation Angency</a> </li>
  		 	<li class="bv"><a class="w13"  href="signup.html">Rwanda investigation bureau </a></li>
  		 </ul>
  	</td>
  	<td width="10%">
  		 <h2 class="h1">FOLLOW US</a></h2>
  		<button class="w6" ><a href="signup.html"><img src="pictures/me.png" width="30" ></a></button>
				<button class="w6" ><a href="signup.html"><img src="pictures/gm.png" width="30" ></a></button>
				<button class="w6" ><a href="signup.html"><img src="pictures/ig.png" width="30" ></a></button>
				<button class="w6" ><a href="signup.html"><img src="pictures/wh.png" width="30" ></a></a></button>
  	</td></tr>
  </table>
  <table height="20px" width="100%">
  	<tr><td class="l">
  		<p class="fd"><i class="fa-regular fa-copyright"></i>2023AUTOBESTWAYTOKNOWYOUR "VEHICLE"SOCIETY </p>
  	</td></tr>
  </table>

  <script type="text/javascript">
  		document.addEventListener("DOMContentLoaded", function() {
  let slideIndex = 0;
  const slides = document.querySelectorAll(".slide");
  const descriptions = document.querySelectorAll(".description");
  showSlide(slideIndex);
  function showSlide(index) {
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[index].style.display = "block";
  }
  function nextSlide() {
    slideIndex++;
    if (slideIndex >= slides.length) {
      slideIndex = 0;
    }
    showSlide(slideIndex);
  }
  setInterval(nextSlide, 5000);
  });

  </script>
</body>
</html>