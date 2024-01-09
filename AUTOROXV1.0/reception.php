
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>reception</title>
	 <script src="script.js"></script>
	 	  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<style type="text/css">*{text-decoration: none;}
		.img{
          float: left;
			margin-left: 3%;

		}
		.slideshow-container:slide{
			display: none;
		}
		img.slide{
			max-width: 100%;
  height: 100%;
  top: 9%;
  background-color: rgba(0, 0, 0, 0.5);
    z-index: -1;
     overflow: hidden;
  filter: blur(8px);
   
  }
  button.w1{
			background-color:   #555;
			width: 190px;
			height: 60px;
             display: inline-block;
             border-radius: 14px;
             right: 3%;
             
      
      padding: 10px;
      text-align: center;
      color: burlywood;
      text-decoration: none;
      font-weight: bold;
      font-family: monospace;
             margin-top: 10px;
             float: right;
             font-size: 20px;
             right: 3%;
             margin: 10px;
         }
         .w1:a{
         	color: burlywood;

         }
         .w1:hover{
         	background-color: #2D3E4E;
         }
      
    h1 {
      font-size: 36px;
      color: #333;
      text-align: center;
      margin-top: 50px;
      font-weight: bold;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    p {
      font-size: 20px;
      color: #666;
      text-align: center;
      margin-top: 20px;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .btn {
      display: block;
      width: 200px;
      margin: 20px auto;
      padding: 10px;
      text-align: center;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 4px;
      font-family: "Open Sans", Arial, sans-serif;
    }
    td.m1{
    	 background-image: url('background-image.jpg');
      background-size: cover;
      background-position: center;
      overflow: hidden;
    }
     .container {
      position: relative;
      text-align: center;
    }

    .container img {
      width: 100%;
      height: auto;
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
    th.k2{
			background-color: #FBE0C3;
			border-radius: 14px;
      position: fixed;
      right: 0;
          left: 0;
          width: 100%;
          z-index: 9999;
          height: 90px;
          top: 0;
			
            
             z-index: 9999;
         }
         .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }

    .login-container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      z-index: 10000;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
    .my-links {
  color: lightskyblue;
  display: inline-block;
}
.icon {
  display: inline-block;
  vertical-align: middle;
  margin-right: 5px; /* Adjust the spacing between the icon and text */
}

.a{
  display: inline-block;
  vertical-align: middle;
	</style>
</head>
<body>
<table height="700px" width="100%">
			<tr><th class="k2" colspan="4" height="120px"><img  class="img" src="pictures/t1.png" width="20%" height="80px">

              <button class="w1"><a href="log.php" class="my-links" ><i class="fa-solid fa-right-to-bracket"></i>LOG IN</a></button>
				<button class="w1" ><a href="sign.php"class="my-links"><i class="fa-solid fa-user-plus"></i>SIGN UP</a></button>

			</th></tr>
			<div class="continer">
			<tr><td colspan="4" rowspan="4">
				<div class="overlay" id="overlay">
    <div class="login-container">
      <h2>Login</h2>
       <iframe id="login-iframe" width="100%" height="400px" frameborder="0" sandbox="allow-same-origin allow-forms"></iframe>
      <span class="close" id="close">&times;</span>
    </div>
  </div>
				<img class="slide" src="pictures/da1.jpg" alt="Image 1">
               <img class="slide" src="pictures/back2.png" alt="Image 2">
  
              <div class="caption">
              	<h1 id="greeting"></h1>
              	<h1>Discover Your Vehicle with AutoRox</h1>
              <p>	Unlock valuable insights about your vehicle's performance, maintenance, and more with AutoRox. Gain a better understanding of your vehicle and make informed decisions for a smoother and safer driving experience.</p>
  <a href="sign.php" class="btn">Get Started</a>
			</td></tr>
			</div>
		</div>
			
	</table>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {
  let slideIndex = 0;
  const slides = document.querySelectorAll(".slide");
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
  setInterval(nextSlide, 3000);
  var loginBtn = document.getElementById('login-btn');
      var overlay = document.getElementById('overlay');
      var closeBtn = document.getElementById('close');
      var iframe = document.getElementById('login-iframe');

      loginBtn.addEventListener('click', function() {
        overlay.style.display = 'block';
        iframe.srcdoc = '<html><head><title>Login Page</title></head><body><form><input type="text" placeholder="Username"><input type="password" placeholder="Password"><button>Submit</button></form></body></html>';
      });

      closeBtn.addEventListener('click', function() {
        overlay.style.display = 'none';
        iframe.srcdoc = 'login2.html';
      });

});
	</script>
	<script type="text/javascript">
		window.addEventListener('DOMContentLoaded', function() {
    var greetingElement = document.getElementById('greeting');
    var currentHour = new Date().getHours();
    var greetingText;

    if (currentHour < 12) {
        greetingText = 'Good morning!';
    } else if (currentHour < 18) {
        greetingText = 'Good afternoon!';
    } else {
        greetingText = 'Good evening!';
    }

    greetingElement.textContent = greetingText;
});
	</script>
</body>
</html>
