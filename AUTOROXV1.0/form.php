

<?php
include("gateway.php"); 
?>
<!DOCTYPE html>  

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>your form</title>
	
</head>
<body>
	<table border="2" height="100%" width="100%">
		<tr><td>
	<?php
if (isset($_GET['bika'])) {
    $fn = $_GET['first_name'];
    $ln = $_GET['last_name'];
    $ad = $_GET['address'];
    $ho = $_GET['hobby'];
    $sid = $_GET['ID'];

    // Perform basic validation
    if (empty($fn) || empty($ln) || empty($ad) || empty($ho) || empty($sid)) {
        echo "Please fill in all the fields.";
    } else {
        $query = "INSERT INTO student (`first name`, `last name`, address, hobby, studentid)
                  VALUES ('$fn', '$ln', '$ad', '$ho', '$sid')";
        $answer = mysqli_query($con, $query);
        if (!$answer) {
            die("Not inserted" . mysqli_error($con));
        }
        echo "Recorded successfully";
    }
} else {
    $a1 = "SELECT * FROM student";
    $a2 = mysqli_query($con, $a1);
    echo "<table border=1>
        <tr>
        <th>Fname</th>
        <th>lname</th>
        <th>address</th>
        <th>hobby</th>
        <th>ID</th>
        </tr>";
    while ($b1 = mysqli_fetch_array($a2)) {
        echo "<tr><td>" . $b1['first name'] . "</td><td>" . $b1['last name'] . "</td><td>" . $b1['address'] . "</td><td>" . $b1['hobby'] . "</td><td>" . $b1['studentid'] . "</td></tr>";
    }
    echo "</table>";
}
?>

<form method="GET" action="">
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" required><br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" required><br><br>

    <label for="address">Address:</label>
    <textarea name="address" id="address" required></textarea><br><br>

    <label for="hobby">Hobby:</label>
    <input type="text" name="hobby" id="hobby" required><br><br>

    <label for="ID">ID:</label>
    <input type="text" name="ID" id="ID" value="2102" required><br><br>

    <input type="submit" name="bika" value="Submit" size="20">
    <input type="submit" name="bikura" value="Retrieve" size="20">
</form></td></tr>
 </table>
</body>
</html>

