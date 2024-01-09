<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">*{text-decoration: none;}
	.img{
       margin-top: 1%;
			float: left;
			margin-left: 12%;
		}
		td.k2{
			background-color: #FBE0C3;
			border-radius: 14px;
            ;
		
		}
		input.a1{
			text-align: left;
			width: 300px;
			height: 50px;
			display: block;
			margin: 0 auto;
			border-radius: 30px;
			padding: 5px;
			font-family: monospace;
			background-color: transparent;
			opacity: 0.5px;
			color: black;

		}
		select.v1{
			text-align: left;
			width: 300px;
			height: 50px;
			display: block;
			margin: 0 auto;
			border-radius: 30px;
			padding: 5px;
			font-family: arial,sans-serif;
			background-color: transparent;
			opacity: 0.5px;
			color: black;
		}
		p.d1{
			text-align: left;
			color: blue;
			font-family: monospace;
			top: 0;
		}
		input.f1{
			width: 250px;
			height: 50px;
			display: block;
			margin: 0 auto;
			border-radius: 50px;
			padding: 5px;
		}
		button.n1{
			background-color: green;
			text-align: center;
			width: 300px;
			height: 50px;
			display: block;
			margin: 0 auto;
			border-radius: 10px;
			padding: 5px;
			font-family: arial,sans-serif;
			 cursor: pointer;
            transition: transform 0.3s ease;
            
		}
		input.h1{
			background-color: navajowhite;
			text-align: center;
			width: 100px;
			height: 50px;
			display: block;
			margin: 0 auto;
			border-radius: 14px;
			margin-left: 420px;
			padding: 5px;
			font-family: arial,sans-serif;
			 cursor: pointer;
            transition: transform 0.3s ease;
            text-decoration: none;

		}
		.container{
			position: absolute;
			top: 0 auto;
			left: 320px;
			height: 120vh;
			padding: 120px;

		}
		.heading{
          text-align: center;
          position: absolute;
           top: 20px;
           left: 600px;
		}
		.heading h1{
			font-size: 36px;
            color: floralwhite;
            font-weight: bold;
		}
		.p1{
			text-align: right;
			margin-right: 200px;
			font-size: 26px;
            color: lightskyblue;
            font-weight: bold;
            top: 100px;
            position: absolute;
            right: 20px;
		}
		h1.h1{
			font-family: American Typewriter, serif;
			font-size: 40px;
			text-align: center;
			color: burlywood;
		}
		p.k1{
			font-family: monospace;
			text-align: center;
			font-size: 18px;
		}
		label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
  text-align: center;
}
a.op{
	top: 0;
}
}
table.t{
	width: 100%;
    border-collapse: collapse;
	 position: fixed;
    max-width: 100%;
}
</style>
<body>
  <table class="t" height="100%" width="100%" >
  	<tr><td class="k2" width="30%" height="80px">
  		<img  class="img" src="pictures/t1.png" width="80%" height="150px">
  	</td>
  	<div class="container">
  	<td width="50%">
  		
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "auto";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $userType = $_POST['userType'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($userType === 'driver') {
        $table = 'drivers'; 
    } elseif ($userType === 'mechanic') {
        $table = 'mechanics'; 
    } elseif ($userType === 'admin') {
        $table = 'admin'; // Use the 'admin' table for verification
    } else {
        // Handle the case when the user type is invalid
        echo 'Invalid user type.';
        exit;
    }

    // Perform the database verification
    $query = "SELECT * FROM $table WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, redirect to the appropriate page based on user type
        if ($userType === 'admin') {
            header('Location: dashboard.php');
        } else {

        	$row = mysqli_fetch_array($result);
        	$_SESSION['id'] = $row['id'];

            header('Location: home1.php');
        }
        exit;
    } else {
        // Login failed, display an error message
        echo '<script>alert("Invalid email or password.");</script>';
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<form method="POST" action="log.php">

  		<h1 class="h1">Welcome to <b>AUTO ROX</b></h1>
  	<P class="k1" > Login to access Auto rox services</P><br/>
  	<select class="v1" name="userType" id="userType">
            <option value="driver">Driver</option>
            <option value="mechanic">Mechanic</option>
             <option value="admin">admin</option>
        </select><br><br>
  		<p><input class="a1" type="text" name="email" id="email" size="20px" placeholder=" telephone or @gmail.com" required></p>
			<p><input class="a1" type="password" name="password" id="password" size="20px" placeholder="PASSWORD" width="10px" height="5px" class="line-input" required></p>
			<p><input class="h1" type="submit"  value="Log in" size="20px" placeholder="Log In" width="10px" height="5px" id="floatButton"></p>
			<p class="d1"><a class="op" href="signup.html"> Forgot password? </a></p>
		</form>
			<hr>
			<p><button class="n1"><a href="sign.php"> Create new account </a></button></p>
  	</td>

  </div>
  </tr>
  	</div>
  </table>
</body>
</html>