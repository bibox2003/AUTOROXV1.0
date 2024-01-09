<?php
session_start();
echo $user_id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>cars</title>
  <style type="text/css">*{text-decoration: none;}
    td.kl {
      background-color: #FBE0C3;
      border-radius: 14px;
    }
    img.w {
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
      width: 100%;
      position: relative;
      cursor: pointer;
      transition: transform 0.3s;
     
    }

    #myButton img {
      width: 100%;
      height: 200px;
    }

    #myButton:hover {
      transform: translateY(-5px);
    }
    input.a1 {
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
    input.g1 {
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
      button.b{
      width: 100% ;
      height: 100px;
      border: none;
      outline: none;
      ;
      ustom-button {
     font-family: monospace;
     font-weight: bold;
    
    font-size: 49px;
    background-color: burlywood;
    }
  .myTable {
  font-family: monospace;
  font-size: 21px;
  border: outset;
  color: skyblue;
  width: 100%;
  max-width: 100%;
  float: right;
  border-radius: 14px;
  margin: 10px;
  margin-left: 5%;
}

.myTable th,
.myTable td {
  padding: 8px;
  text-align: center;
  left: 5%;
  border-top: outset;
  border-bottom: outset;
  border-right: outset;
}
  </style>
</head>
<body>
  <table height="120px" width="100%">
    <tr>
      <td class="kl" height="90px">
        <img class="w" src="pictures/t1.png" width="20%" height="80px">
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <h1 class="kl">car:</h1>
           <hr>
        <button class="b" onclick="openLoginForm()"><a href="#" id="myButton">+ ADD CAR</a></button>
        <div id="loginModal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeLoginForm()">&times;</span>
            <h2>Enter your car details:</h2>
            <form method="POST" action="koma.php">
              <input class="a1" type="text" name="name" placeholder="name" required><br>
              <input class="a1" type="text" name="model" placeholder="model" required><br>
              <input class="a1" type="text" name="make" placeholder="make" required><br>
              <input class="a1" type="text" name="year" placeholder="year" required><br>
              <input class="a1" type="text" name="size" placeholder="size" required><br>
              <input class="a1" type="text" name="transmission" placeholder="transmission" required><br><br>
              <input class="g1" type="submit" name="submit" value="ADD">
            </form>
          </div>
        </div>
        <?php
// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $name = $_POST['name'];
  $model = $_POST['model'];
  $make = $_POST['make'];
  $year = $_POST['year'];
  $size = $_POST['size'];
  $transmission = $_POST['transmission'];

  // Database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "auto";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert the car details into the database
  $sql = "INSERT INTO cars (name, model, make, year, size, transmission,id) VALUES ('$name', '$model', '$make', '$year', '$size', '$transmission', '$user_id')";

  if ($conn->query($sql) === TRUE) {
    echo "Car details added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
      </td>
    </tr>
  </table>
  <table border="1" width="100%" height="200px">
   <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auto";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the logged-in user's ID (assuming it is stored in the $user_id variable)
$user_id = $_SESSION['id']; // Assuming you have a user session variable

// Fetch the user's car details from the database
$sql = "SELECT name, model, make, year, size, transmission FROM cars WHERE id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the car details in a tabular form with CSS styles
    echo '<div class="myTable">';
    echo '<table id="myTable" style="border-collapse: collapse; width: 100%;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th style="border: 1px solid black; padding: 8px;">name</th>';
    echo '<th style="border: 1px solid black; padding: 8px;">model</th>';
    echo '<th style="border: 1px solid black; padding: 8px;">make</th>';
    echo '<th style="border: 1px solid black; padding: 8px;">year</th>';
    echo '<th style="border: 1px solid black; padding: 8px;">size</th>';
    echo '<th style="border: 1px solid black; padding: 8px;">transmission</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['name'] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['model'] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['make'] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['year'] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['size'] . "</td>";
        echo "<td style='border: 1px solid black; padding: 8px;'>" . $row['transmission'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "No car details found for the logged-in user.";
}

$conn->close();
?>

  <script>
    // Function to open the login form modal
    function openLoginForm() {
      document.getElementById("loginModal").style.display = "block";
    }

    // Function to close the login form modal
    function closeLoginForm() {
      document.getElementById("loginModal").style.display = "none";
    }
  </script>

</body>
</html>