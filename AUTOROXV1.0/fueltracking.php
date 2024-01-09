<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> fueltr</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/toorshia/justgage/raphael-2.1.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/toorshia/justgage/justgage.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="script.js"></script>
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
		img.w{
       margin-top: 1%;
			float: left;
			margin-left: 12%;
		}
		.img2{
			 margin-top: 1%;
			float: left;
			;
		}
		#fuel-gauge-container {
      width: 400px;
      height: 150px;
      top: -200px;
      margin-right: 10%;
      float: left;
      
    }

    #speedometer {
      font-family: "Digital-7", monospace;
      font-size:100px;
      display: inline-block;
      
      
    }
    h1.h1{
			font-family:monospace;
			font-size: 40px;
			margin-top: 20px;
			text-align: center;
			color: black;
			float: left;
			margin-right: 20%;
		}
		input.h1{
			text-align: left;
			width: 400px;
			height: 30px;
			display: block;
			margin: 0 auto;
			border-radius: 30px;
			padding: 5px;
			font-family: monospace;
			background-color: transparent;
			opacity: 0.5px;
			color: black;
			float: left;
			margin-left: 20%;
			
		}
		label.f1{
			font-family: monospace;
			font-size: 30px;
			float: left;
			margin-left: 30%;
			top: ;
		}
		button.k1{
			width: 200px;
			height: 40px;
			background-color: burlywood;
			margin: 0 auto;
			border-radius: 8px;
			padding: 5px;
			font-family: monospace;
			color: black;
			padding: 5px;
			float: left;
			margin-top: 2%;
			margin-left: 30%;
		}
		#reminderMessage {
  font-size: 40px;
  font-family: monospace;
  text-align: center;

}
#chartContainer2 {
            width: 100%;
            height: 30%;
        }
        p.k1{
	text-align: center;

      font-family: Arial, sans-serif;
}
 table {
      
      width: 100%;
    }

    th, td {
      
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
.price-rise {
      color: red;
    }

    .price-fall {
      color: green;
    }
</style>
<body>
  <table height="120px" width="100%">
  	<tr><td class="kl" height="90px">
  		<img  class="w" src="pictures/t1.png" width="20%" height="80px">
  	</td></tr>
  </table>
  <h1 class="h1"><b>FUEL TRACKING</b></h1>
  <table   height="600px" width="100%">
  	<tr><td width="50%">
  		<img  class="img2" src="pictures/fuel2.jpg" width="100%" height="100%">
  	</td>
  	<td width="50%">
  		<div id="fuel-gauge-container"></div>
  <div id="speedometer">0</div>
  
 <label class="f1" for="lastFueledDate">Last Fueled Date:</label>
  <input class="h1" type="date" id="lastFueledDate">
  <br/>
  <p><button class="k1" onclick="setReminder()">Set Reminder</button></p>
  <p id="reminderMessage"></p>
  <script src="script.js"></script>
  <div id="chartContainer2">
        <canvas id="areaChart"></canvas>
    </div>
    <p class="k1"><b>fuel consuption per month</b></p><br><br><br><br><br>
     <table  id="fuelPrices" width="100%" height="20px">
    <caption> Fuel Prices</caption>
    <thead>
      <tr>
        <th>Fuel Type</th>
        <th>Price (Rwandan Francs)</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <!-- The table rows will be dynamically added using JavaScript -->
    </tbody>
  </table>
  	</td></tr>
  </table>
  <script type="text/javascript">
  	 window.onload = function() {
  // Fuel Gauge
  var fuelGauge = new JustGage({
    id: "fuel-gauge-container",
    value: 50, // Initial value
    min: 0,    // Minimum value
    max: 100,  // Maximum value
    title: "Fuel Gauge",
    label: "Fuel Level",
    levelColors: ["#ff0000", "#ffa500", "#00ff00"], // Customizing color ranges
    gaugeWidthScale: 0.6, // Adjusting the width of the gauge
    counter: true  // Displaying the current value
  });

  // Speedometer
  var speedometer = new Odometer({
    el: document.getElementById("speedometer"),
    value: 0, // Initial value
    format: "(,ddd).dd", // Format for the numbers
    duration: 2000 // Animation duration in milliseconds
  });

  // Function to update the fuel level and speedometer value
  function updateFuelAndSpeed(fuelLevel, speed) {
    fuelGauge.refresh(fuelLevel);
    speedometer.update(speed);
  }
   // Example usage: update the fuel level and speed every 3 seconds
  setInterval(function() {
    var randomFuel = Math.floor(Math.random() * 101); // Random fuel level between 0 and 100
    var randomSpeed = Math.floor(Math.random() * 100); // Random speed between 0 and 100
    updateFuelAndSpeed(randomFuel, randomSpeed);
  }, 3000);
};
function setReminder() {
  var lastFueledDateInput = document.getElementById('lastFueledDate');
  var reminderMessage = document.getElementById('reminderMessage');

  var lastFueledDate = new Date(lastFueledDateInput.value);
  var currentDate = new Date();

  // Calculate the time difference in milliseconds
  var timeDiff = currentDate.getTime() - lastFueledDate.getTime();

  // Convert the time difference to days
  var daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                          
  if (daysDiff >= 3) {
   showAlert("It's been" + daysDiff + " day(s) since you last fueled. Consider refueling!");
  } else {
 showAlert( "You recently fueled. No immediate need to refuel.");
  }
}
function showAlert(title, message) {
  alert(title + "\n\n" + message);
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
// Sample fuel price data for Rwanda (can be replaced with real-time data)
var fuelPrices = [
  { fuelType: "Petrol", price: 1030, date: "December 21, 2023" },
  { fuelType: "Diesel", price: 980, date: "December 21, 2023" },
  { fuelType: "Kerosene", price: 780, date: "December 21, 2023" }
  // Add more fuel price data for other fuel types as needed
];

// Function to dynamically update the fuel price table
function updateFuelPriceTable() {
  var tableBody = document.getElementById("fuelPrices").getElementsByTagName("tbody")[0];

  // Clear existing table rows
  tableBody.innerHTML = "";

  // Iterate over the fuel price data and create table rows dynamically
  for (var i = 0; i < fuelPrices.length; i++) {
    var fuelPrice = fuelPrices[i];
    var row = document.createElement("tr");

    var fuelTypeCell = document.createElement("td");
    fuelTypeCell.textContent = fuelPrice.fuelType;
    row.appendChild(fuelTypeCell);

    var priceCell = document.createElement("td");
    priceCell.textContent = fuelPrice.price.toFixed(2);
    row.appendChild(priceCell);

    var dateCell = document.createElement("td");
    dateCell.textContent = fuelPrice.date;
    row.appendChild(dateCell);

    // Check if the price has risen or fallen compared to the previous entry
    if (i > 0) {
      var previousPrice = fuelPrices[i - 1].price;
      if (fuelPrice.price > previousPrice) {
        row.classList.add("price-rise");
      } else if (fuelPrice.price < previousPrice) {
        row.classList.add("price-fall");
      }
    }

    tableBody.appendChild(row);
  }
}

// Call the function to initially populate the fuel price table
updateFuelPriceTable();
  </script>
</body>
</html>