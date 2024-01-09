
<?php
session_start();
echo $user_id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
	 <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style type="text/css">*{text-decoration: none;}
	td.kl{
			background-color: #FBE0C3;
			border-radius: 14px;
		}
		img.w{
       margin-top: 1%;
			float: left;
			margin-left: 36%;
		}


.text-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  
  box-sizing: border-box;
}

.text-overlay h2,
.text-overlay p {
  margin: 0;
  text-align: center;
}

.text-overlay h2 {
  font-size: 24px;
  font-weight: bold;
}

.text-overlay p {
  font-size: 18px;
}
td.mb{
	 position: relative;
  
}
table.df{
	top: 60%;
	background-color: whitesmoke;

	 position: absolute;
  z-index: 2;
  border-radius: 18px;
  margin: 5%;
  margin-left: 10%;
}
table.tf{
    top: 134%;
	background-color: whitesmoke;
	position: absolute;
	border-radius: 18px;
  margin: 5%;
z-index: 2;
margin-left: 10%;
  
}
table.tfd{
	 top: 134%;
	background-color: whitesmoke;
	position: absolute;
	border-radius: 18px;
  margin: 5%;
z-index: 2;
margin-left: 60%;
}
.profile img {
  width: 130px;
  height: 130px;
  border-radius: 50%;
  margin-bottom: 10px;
  margin-left: 45%;
  flex-grow: 2;
  margin-top: 2%;
}

.profile h2, .profile p {
  margin: 0;
  margin-left: 46%;
  flex-grow: 2;
  top: 0;
  font-size: 18px;
  font-family: monospace;
}
.dashboard {
  display: flex;
  justify-content: space-around;
}

.box {
	width: 200px;
	height: 80px;
  padding: 17px;
  top: 0;
  text-align: center;
  border-radius: 10px;
  float: right;
  margin-left: 3%;
  color: whitesmoke;
  font-size: 12px;
  font-family: monospace;
  font-weight: bold;
  margin-top: 2%;
}

.box1 {
  background-color:  rgba(255, 0, 0, 0.5);
  background-image:  url("pictures/ba6.jpg");
  float: right;
  size: 18px;
}

.box2 {
	background-color:  rgba(255, 0, 0, 0.5);
  background-color: lightgreen;
}
.box3 {
	background-color: rgba(255, 0, 0, 0.5);
  background-color: lightgreen;
}
	button.w1{
			
			text-align: center;
			width: 100%;
			height: 60px;
			display: block;
			padding: 20px;
			font-family: monospace;
			 cursor: pointer;
             float: none;
             position: relative;
             font-size: 20px;
             display: flex;
             top: 0;
              outline: none;
              border: none;
             

    
            
		}
		.w1:hover{
			 background-color: #FBE0C3;
			 text-decoration-color:lightseagreen;

		}
		.icon {
  display: inline-block;
  vertical-align: middle;
  margin-right: 5px; /* Adjust the spacing between the icon and text */
}
.my-links {
  color: black;
  display: inline-block;
}
h.l{
	font-size: 24px;
	font-family: monospace;
	font-weight: bold;

}
td.h{
	font-size: 18px;
	font-family: monospace;
	font-weight: bold;
}
.my-links1 {
  color: white;
  display: inline-block;
  padding: 5px;
}
.my-links2{
	color: lightblue;
  display: inline-block;
  padding: 5px;
  
}
</style>
<body>
    <table height="120px" width="100%">
  	<tr><td class="kl" height="90px">
  		<img  class="w" src="pictures/t1.png" width="20%" height="80px">
  	</td></tr>
  </table>
  <table  width="100%" height="360px">
  	<tr><td class="mb">
  		<img   src="pictures/op.png" width="100%" height="450px">
  		 <div class="text-overlay">
      <h2>MY PROFILE</h2>
      <p><a href="signup.html" class="my-links1">Home</a>/<a  class="my-links2">ME</a></p>
    </div>
  	</td></tr>
  </table>
  <table class="df"  width="80%" height="280px">
  	<tr><td>
  		<div class="profile">
    <label for="+">
      <img id="profilePicture" src="pictures/chev.jpg" alt="Profile Picture">
    </label>
    <h2 id="name">John Doe</h2>
    <p id="occupation">Software Developer</p>
    <p id="location"><i class="fa-light fa-location-dot"></i>New York City</p>
    <input id="profilePictureInput" type="file" accept="image/*" style="display: none;">
  </div>
   <div class="dashboard">
    <div class="box box1">
      <h3>Total Followers</h3>
      <p class="metric">10,000</p>
    </div>
    <div class="box box2">
    	<p class="metric">4</p>
      <h3>Total vehicles</h3>
    </div>
    <div class="box box3">
    	<p class="metric">40%</p>
      <h3>Fuel consumption</h3>
    </div>
    <!-- Add more boxes as needed -->
  </div>
  	</td></tr>
  </table>
   <table class="tf" width="46%">
        <tr>
            <th colspan="2">
                <h class="l">ME</h>
            </th>
        </tr>
  <?php


// Establish the database connection
$server = "localhost";
$user = "root";
$password = "";
$db = "auto";
$con = mysqli_connect($server, $user, $password, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in
if (isset($_SESSION['id'])) 
    $user_id = $_SESSION['id'];
    
    // Fetch the person's information from the database based on the logged-in user's ID
    $query = "SELECT * FROM drivers WHERE id = '$user_id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    
    // Use the fetched information
    ?>
    <table class="tf"  width="46%">
        <tr>
            <td class="h" width="65%">First name</td>
            <td class="h" width="35%"><?php echo $row['firstname']; ?></td>
        </tr>
        <tr>
            <td class="h" width="65%">Last name</td>
            <td class="h" width="35%"><?php echo $row['lastname']; ?></td>
        </tr>
        <tr>
            <td class="h" width="65%">Gender</td>
            <td class="h" width="35%"><?php echo $row['gender']; ?></td>
        </tr>
        <tr>
            <td class="h" width="65%">password</td>
            <td class="h" width="35%"><?php echo $row['password']; ?></td>
        </tr>
        <tr>
            <td class="h" width="65%">email</td>
            <td class="h" width="35%"><?php echo $row['email']; ?></td>
        </tr>
        <tr>
            <td class="h" width="65%">Province</td>
            <td class="h" width="35%"><?php echo $row['province']; ?></td>
        </tr>
        <tr>
            <td class="h" width="65%">district</td>
            <td class="h" width="35%"><?php echo $row['district']; ?></td>
        </tr>
        <tr>
            <td class="h" width="65%">DOB</td>
            <td class="h" width="35%"><?php echo $row['dob']; ?></td>
        </tr>
    </table>
   <table class="tfd" width="31%" height="190px" >
  	<tr><td>
  		<button class="w1" ><a href="signup.html" class="my-links">SETTINGS</a></button>
				<button class="w1" ><a href="mantainance tracking.html" class="my-links">NOTIFICATIONS</a></button>
				<button class="w1" ><a href="logout1.php" class="my-links">LOGOUT</a></button>
  	</td></tr>
  </table>

?>
  <script src="script.js"></script>
 <script type="text/javascript">
  	const profilePicture = document.getElementById("profilePicture");
const nameElement = document.getElementById("name");
const occupationElement = document.getElementById("occupation");
const locationElement = document.getElementById("location");
const profilePictureInput = document.getElementById("profilePictureInput");

// Update profile details
profilePicture.src = "pictures/chev.jpg";
nameElement.textContent = "John Doe";
occupationElement.textContent = "Software Developer";
locationElement.textContent = "New York City";

// Add event listener to profile picture input
profilePictureInput.addEventListener("change", function(event) {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    profilePicture.src = e.target.result;
  };

  if (file) {
    reader.readAsDataURL(file);
  }
});

// Trigger file selection when profile picture is clicked
profilePicture.addEventListener("click", function() {
  profilePictureInput.click();
});
  </script>
</body>
</html>