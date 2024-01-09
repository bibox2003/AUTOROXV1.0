<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>drivers</title>
		  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<style type="text/css">
	.img{
          float: left;
			margin-left: 38%;

		}
		td.kl{
			background-color: #FBE0C3;
			border-radius: 14px;
		}
		#searchForm {
  display: inline-block;
  align-items: center;
  border: none;
  justify-content: center;
}

#searchInput {
  width: 300px;
  height: 40px;
  font-size: 18px;
  padding: 5px;
  border-radius: 14px;
}

#searchForm button {
  height: 40px;
  font-size: 18px;
  padding: 5px 10px;
  display: inline-block;
  border-radius: 14px;
}
#myTable {
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

#myTable th,
#myTable td {
  padding: 8px;
  text-align: center;
  left: 5%;
   border-top:outset ;
    border-bottom: outset;
    border-right: outset;

}
</style>
<body>
 <table  width="100%"  heihgt="200px">
 	<tr><td class="kl" height="90px" width="100%">
 		<img  class="img" src="pictures/t1.png" width="20%" height="80px">
 	</td></tr>
 </table>
 <table   width="100%"  heihgt="200px">
 	<tr><td>
 			<form id="searchForm">
  <input type="text" id="searchInput" placeholder="Search..." />
  <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </div
</form>
<div id="resultsContainer"></div>
<hr>
 
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "auto";
$con = mysqli_connect($server, $user, $password, $db);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the drivers table
$query = "SELECT * FROM drivers";
$result = mysqli_query($con, $query);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    echo '<div class="table-responsive">';
    echo '<table id="myTable" class="table table-bordered">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>First Name</th>';
    echo '<th>Last Name</th>';
    echo '<th>Province</th>';
    echo '<th>District</th>';
    echo '<th>Gender</th>';
    echo '<th>Password</th>';
    echo '<th>Email</th>';
    echo '<th>DOB</th>';
    echo '<th>Action</th>'; // New column for action buttons
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through each row and display the data in table rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['province'] . '</td>';
        echo '<td>' . $row['district'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['password'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['dob'] . '</td>';
        echo '<td><a href="koma.php?user_id=' . $row['id'] . '">View</a></td>'; // View button with user_id as a parameter
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo 'No data found in the drivers table.';
}

// Close the database connection
mysqli_close($con);
?>
 <script type="text/javascript">
 	 var searchForm = document.getElementById('searchForm');
    var searchInput = document.getElementById('searchInput');
    var resultsContainer = document.getElementById('resultsContainer');
    var tableData = <?php echo json_encode($tableData); ?>; // Pass the table data to JavaScript

    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();

        var searchTerm = searchInput.value;
        var searchResults = performSearch(searchTerm);

        displayResults(searchResults);
    });

    function performSearch(searchTerm) {
       var filteredResults = tableData.filter(function(row) {
            // Modify the property 'Fname' to match the column name containing the name
            return row.Fname.toLowerCase().includes(searchTerm.toLowerCase());
        });

        return filteredResults;
    }

    function displayResults(searchResults) {
        resultsContainer.innerHTML = '';

        if (searchResults.length === 0) {
            resultsContainer.innerHTML = 'No results found.';
            return;
        }
         searchResults.forEach(function(result) {
            var resultElement = document.createElement('div');
            var titleElement = document.createElement('a');

            titleElement.textContent = result.Fname; // Modify the property to match the column name containing the name
            titleElement.href = '#'; // Modify the URL as needed

            resultElement.appendChild(titleElement);
            resultsContainer.appendChild(resultElement);
        });
    }
 </script>
</body>
</html>