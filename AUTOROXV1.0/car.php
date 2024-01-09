<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cars</title>
  <style type="text/css">
    td.kl{
      background-color: #FBE0C3;
      border-radius: 14px;
    }
    img.w{
       margin-top: 1%;
      float: left;
      margin-left: 36%;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: ghostwhite;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      max-width: 400px;
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor:pointer;
      } 
       #myButton {
  display: inline-block;
  position: relative;
    cursor: pointer;
    transition: transform 0.3s;
    margin-left: 20%;
  }

  #myButton img {
    width: 100%;
    height: 200px;
  }

  #myButton:hover {
     transform: translateY(-5px);
    
    
  }
   input.a1{
      text-align: left;
      width: 300px;
      height: 40px;
      display: block;
      margin: 0 auto;
      border-radius: 30px;
      padding: 2px;
      font-family: monospace;
      background-color: transparent;
      opacity: 0.5px;
      color: black;
    }
     input.g1{
      background-color: green;
      text-align: center;
      width: 250px;
      height: 50px;
      display: block;
      color: white;
      margin-left: 15%;
      
      border-radius: 30px;
      padding: 5px;
      font-family: monospace;
       cursor: pointer;
            transition: transform 0.3s ease;
            
    }

  </style>
</head>
<body>
      <table height="120px" width="100%">
    <tr><td class="kl" height="90px">
      <img  class="w" src="pictures/t1.png" width="20%" height="80px">
    </td></tr>
  </table>
  <table>
    <tr><td><h1 class="kl">car:</h1>
      <button class="b" onclick="openLoginForm()"><a href="#" id="myButton" >ADD</a></button>
      <div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeLoginForm()">&times;</span>
      <h2>Enter your car details :</h2>
      <form method="POST" action="cars.php">
        <input class="a1" type="text"  name="amount" placeholder="name" required><br>
        <input class="a1" type="text" name="name" placeholder="model" required><br>
        <input class="a1" type="text"  name="amount" placeholder="make" required><br>
        <input class="a1" type="card"  name="amount" placeholder="year" required><br>
        <input class="a1" type="text"  name="amount" placeholder="size" required><br>
        <input class="a1" type="text"  name="amount" placeholder="transmission" required><br><br>
        <input class="g1" type="submit" name="submit" value="ADD" size="20px">
      </form>
    </div>
</div>
      <?php
session_start();

// Check if the user is logged in as a driver
if ($_SESSION['userType'] !== 'driver') {
    header('Location: log.php'); // Replace "login.php" with the actual login page URL
    exit;
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $model = $_POST['model'];
    $make = $_POST['make'];
    $year = $_POST['year'];
    $size = $_POST['size'];
    $transmission = $_POST['transmission'];
    
    // Retrieve the driver ID from the session
    $driverId = $_SESSION['id'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "auto";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Insert the car details into the database
    $query = "INSERT INTO cars (id, name, model, make, year, size, transmission)
              VALUES ('$driverId', '$name', '$model', '$make', '$year', '$size', '$transmission')";
    $result = mysqli_query($conn, $query);
    
    // Check if the insertion was successful
    if ($result) {
        // Car added successfully, redirect to a success page or display a success message
        echo "Registered successfully as a driver"; // Replace "success.php" with the actual success page URL
        exit;
    } else {
        // Error occurred while adding the car, redirect to an error page or display an error message
        echo "not successfully ";// Replace "error.php" with the actual error page URL
        exit;
    }
    
    // Close the database connection
    mysqli_close($conn);
}
?>
    </td>
  </tr>
  </table>
  <script type="text/javascript">
    function openLoginForm() {
      document.getElementById("loginModal").style.display = "block";
    }

    function closeLoginForm() {
      document.getElementById("loginModal").style.display = "none";
    }
  </script>
</body>
</html>