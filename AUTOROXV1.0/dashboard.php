<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>dashboard</title>
	  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style type="text/css">*{text-decoration: none;}
	th.k2{
			background-color: #FBE0C3;
			border-radius: 14px;
			position: relative;
			
            }
            .img{
          position: relative;
         float: left;
          left: 0;
          top: 0;

		}
		button.w1{
			background-color:   #555;
			text-align: center;
			width: 100%;
			height: 40px;
			display: block;
			padding: 2px;
			font-family: arial,sans-serif;
			 cursor: pointer;
             float: none;
             position: relative;
             font-size: 17px;
             display: flex;
             border-radius: 10px;
             

    
            
		}
		.w1:hover{
			background-color: #2D3E4E;

		}
		 #chartContainer {
            width: 600px;
            height: 100%;
            border: 1px solid #ccc;
        }
         #chartContainer1 {
            width: 100%;
            height: 100%;
        }
        #chartContainer2 {
            width: 100%;
            height: 100%;
        }
        .tag {
  display: inline-block;
  padding: 5px 10px;
  background-color: #FBE0C3;
  border-radius: 5px;
  margin-right: 10px;
  height: 40px;
  width: 160px;
}

.tag::after {
  content: attr(data-number);
  background-color: gold;
  color: #fff;
  font-weight: bold;
  padding: 2px 6px;
  border-radius: 50%;
  margin-right: 5px;
  margin: 10px;
}
#searchForm {
  display: inline-block;
  align-items: center;
  border: none;
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
p.k1{
	text-align: center;

      font-family: Arial, sans-serif;
}
.i{
	margin: 10px;
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
}
#myTable {
  font-family: Arial, sans-serif;
  color: skyblue;
  width: 100%;
  max-width: 100%;
  float: right;
  border-radius: 14px;
  margin: 10px;
}i

#myTable th,
#myTable td {
  padding: 8px;
  text-align: center;
  left: 5%;
}

#myTable thead {
  background-color: #f2f2f2;
}

#myTable tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

button {
  margin: 10px 0;
}
}
.dashboard {
  display: flex;
  justify-content: space-around;
}

.box {
  width: 150px;
  height: 50px;
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
.box4 {
  background-color: rgba(255, 0, 0, 0.5);
  background-color: lightgreen;
}
		
</style>
<body>
   <table  height="600px" width="100%">
			<tr><th  rowspan="6" width="200px" height="300px" class="k2"><img  class="img" src="pictures/t1.png" width="100%" height="80px">
				<span class="icon">
				<div class="i">
				<button class="w1"><a href="layout.html" class="my-links"><i class="fa-solid fa-house"></i>home</button>
				<button class="w1" ><a href="signup.html" class="my-links"><i class="fa-solid fa-screwdriver-wrench"></i>Maintance tracking</a></button>
       
          <button class="w1" ><a href="drivers.php" class="my-links"><i class="fa-solid fa-screwdriver-wrench"></i>
Car owners</a></button>
<button class="w1" ><a href="mechanics.php" class="my-links"><i class="fa-solid fa-screwdriver-wrench"></i>
mechanics</a></button>

				
				<hr>
				<button class="w1" ><a href="signup.html" class="my-links"><i class="fa-solid fa-gear"></i>settings</a></button>
			</div>
			</span>
			 <p><b>
			    	About press copyright contact us creat advertise <br/>

			        Terms privacy policy& safety
			        how Auto Rox work ,Test new features

			    </b>
			    </p> 
			</th>
				<th colspan="3">
					<form id="searchForm">
  <input type="text" id="searchInput" placeholder="Search..." />
  <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </div
</form>

<div id="resultsContainer"></div>
				</th></tr>
			<tr><td colspan="2" rowspan="2"  width="10px" height="7px">
				<div class="dashboard">
          <?php
          $server ="localhost";
  $user ="root";
  $password ="";
  $db= "auto";
  $con = mysqli_connect($server, $user,$password,$db);

    $query = "SELECT COUNT(*) AS total FROM drivers";
    $result = mysqli_query($con, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $totalCount = $row['total'];
    } else {
        $totalCount = 0;
    }
    ?>
    <div class="box box1">
      <h3>Owners</h3>
      <p class="metric"><?php echo $totalCount; ?></p>
    </div>
    <div class="box box2">
      <p class="metric"><?php echo $totalCount; ?></p>
      <h3>Total vehicles</h3>
    </div>
    <div class="box box3">
      <p class="metric">2</p>
      <h3>Documents available</h3>
    </div>
    <!-- Add more boxes as needed -->
  </div>
                
			</td><td rowspan="2">
				<div class="box box4">
      <p class="metric">40%</p>
      <h3></h3>
    </div>
			</td></tr>
			<tr></tr>
			<tr><td  colspan="2" rowspan="2" height="18px">
				
				
				 <div id="chartContainer">
        <canvas id="myChart"></canvas>
        <p class="k1"><b>Owners by year</b></p>
    </div>
    <script src="script.js"></script>
			</td><td rowspan="2">
				<p class="k1">
					<b>
						Owners by gender
					</b>
				</p>
				<hr>
				<div id="chartContainer1">
        <canvas id="myChart1"></canvas>
    </div>
    <script src="script.js"></script>
        
    </div>
			</td></tr>
			<tr></tr>
			<tr><td colspan="2"  height="160px">
				<canvas id="myChart2"></canvas>

			</td><td>
				<div id="chartContainer2">
        <canvas id="areaChart"></canvas>
    </div>
    <p class="k1"><b>Owners this month</b></p>
				
			</td></tr>
			
	</table>

				
			
	<script type="text/javascript">
		window.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var chartData = {
        labels: ['2020', '2021', '2023','2023'],
        datasets: [{
            label: 'Data',
            data: [30, 50, 20,35],
            backgroundColor: 'steelblue',
        }]
    };

    var chartOptions = {
        responsive: true,
        scales: {
            x: {
                display: true
            },
            y: {
                display: true,
                beginAtZero: true
            }
        }
    };

    new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: chartOptions
    });
    var ctx = document.getElementById('myChart1').getContext('2d');
    var chartData = {
        labels: ['Male', 'Female'],
        datasets: [{
            data: [40, 60],
            backgroundColor: ['blue', 'red'],
        }]
    };

    var chartOptions = {
        responsive: true,
    };

    new Chart(ctx, {
        type: 'pie',
        data: chartData,
        options: chartOptions
    });

  var searchForm = document.getElementById('searchForm');
  var searchInput = document.getElementById('searchInput');
  var resultsContainer = document.getElementById('resultsContainer');

  searchForm.addEventListener('submit', function(event) {
    event.preventDefault();

    var searchTerm = searchInput.value;
    var searchResults = performSearch(searchTerm);

    displayResults(searchResults);
  });

  function performSearch(searchTerm) {
    // Replace this with your own search implementation
    // You can search through an array, make an API request, or perform any other search logic
    // Return an array of search results
    // Example:
    var data = [
      { title: 'Result 1', url: 'https://example.com/result1' },
      { title: 'Result 2', url: 'https://example.com/result2' },
      { title: 'Result 3', url: 'https://example.com/result3' }
    ];

    var filteredResults = data.filter(function(result) {
      return result.title.toLowerCase().includes(searchTerm.toLowerCase());
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

      titleElement.textContent = result.title;
      titleElement.href = result.url;

      resultElement.appendChild(titleElement);
      resultsContainer.appendChild(resultElement);
    });
  }
  var ctx = document.getElementById('areaChart').getContext('2d');

// Define the data for the chart
var chartData = {
  labels: ['January', 'February', 'March', 'April', 'May', 'June'],
  datasets: [{
    label: 'Area Chart',
    data: [10, 20, 15, 25, 20, 30],
    backgroundColor: 'rgba(75, 192, 192, 0.5)',
    borderColor: 'rgba(75, 192, 192, 1)',
    borderWidth: 1
  }]
};

// Configure the chart options
var chartOptions = {
  responsive: true,
  maintainAspectRatio: false,
  scales: {
    y: {
      beginAtZero: true
    }
  }
};

// Create the area chart
var areaChart = new Chart(ctx, {
  type: 'line',
  data: chartData,
  options: chartOptions
});
// Data for the chart
var data = {
  labels: ["kicukiro", "gasabo", "nyarugenge", "bugesera"], // Example district labels (you can change these)
  datasets: [
    {
      label: "Female",
      data: [50, 40, 60, 30], // Example female data values (you can change these)
      backgroundColor: "red", // Example color for female bars (you can change this)
      borderWidth: 1
    },
    {
      label: "Male",
      data: [70, 80, 50, 60], // Example male data values (you can change these)
      backgroundColor: "blue", // Example color for male bars (you can change this)
      borderWidth: 1
    }
  ]
};

// Configuration options for the chart
var options = {
  responsive: true,
  maintainAspectRatio: false,
  scales: {
    y: {
      beginAtZero: true,
      ticks: {
        stepSize: 10
      }
    }
  }
};

// Create the chart
var ctx = document.getElementById("myChart2").getContext("2d");
var myChart = new Chart(ctx, {
  type: "bar",
  data: data,
  options: options
});
var people = []; // Array to store the people data

// Function to add a person to the table
function addPerson() {
  var name = prompt("Enter the person's name:");
  var age = prompt("Enter the person's age:");

  var person = {
    name: name,
    age: age
  };

  people.push(person); // Add the person to the array

  renderTable(); // Render the updated table
}

// Function to delete a person from the table
function deletePerson(index) {
  people.splice(index, 1); // Remove the person from the array

  renderTable(); // Render the updated table
}

// Function to render the table with the updated data
function renderTable() {
  var tableBody = document.querySelector("#myTable tbody");

  // Clear the existing table rows
  tableBody.innerHTML = "";

  // Generate new table rows based on the people array
  for (var i = 0; i < people.length; i++) {
    var person = people[i];

    var row = document.createElement("tr");

    var firstnameCell = document.createElement("td");
    firstnameCell.textContent = person.Firstname;
    row.appendChild(firstnameCell);

    var lastnameCell = document.createElement("th");
    lastnameCell.textContent = person.lastname;
    row.appendChild(lastnameCell);

    var provinceCell = document.createElement("td");
    provinceCell.textContent = person.province;
    row.appendChild(provinceCell);

    var districtCell = document.createElement("td");
    districtCell.textContent = person.district;
    row.appendChild(districtCell);


    var modelCell = document.createElement("td");
    modelCell.textContent = person.Model;
    row.appendChild(modelCell);

    var ageCell = document.createElement("td");
    ageCell.textContent = person.age;
    row.appendChild(ageCell);

    var sexCell = document.createElement("td");
    sexCell.textContent = person.sex;
    row.appendChild(sexCell);


    var actionsCell = document.createElement("td");
    var deleteButton = document.createElement("button");
    deleteButton.textContent = "Delete";
    deleteButton.onclick = function () {
      deletePerson(i);
    };
    actionsCell.appendChild(deleteButton);

    row.appendChild(actionsCell);

    tableBody.appendChild(row);
  }
}
});

	</script>
</body>
</html>