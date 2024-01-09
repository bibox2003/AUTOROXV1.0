<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>maintance</title>
	 <script src="script.js"></script>
	<style type="text/css">
		.img{
          float: left;
			margin-left: 38%;

		}
		td.kl{
			background-color: #FBE0C3;
			border-radius: 14px;
		}
			button.w1{
			background-color:   #555;
			text-align: center;
			width: 320px;
			height: 40px;
			display: inline-block;
			padding: 5px;
			font-family: monospace;
			font-size: 18px;
			 cursor: pointer;
             float: none;
             margin-top: 1%;
            border-radius: 14px;
             margin-left: 6%;
             font-size: 17px;
             
            
		}
		.w1:hover{
			background-color: #2D3E4E;

		}
		 .container {
      border: 1px solid black;
      padding: 10px;
      margin-top: 20px;
    }
	</style>
</head>
<body>
   <table border="1" width="100%"  heihgt="200px">
   	<tr><td class="kl" height="90px" width="100%">
   		<img  class="img" src="pictures/t1.png" width="20%" height="80px">
   	</td></tr>
   </table>
   <table border="1" width="100%" height="150px">
   	<tr><td>
   	<button class="w1" ><b>Front part</b></button>
				<button class="w1" onclick="displayContent('engine')">engine</button>
				<button class="w1" onclick="displayContent('Transmission')">Transmission</button>
				<button class="w1" onclick="displayContent('Battery')">Battery</button>
				<button class="w1" onclick="displayContent('Altenator')">Altenator</button>
				<button class="w1" onclick="displayContent('Radiator')">Radiator</button>
				<button class="w1" onclick="displayContent('Front axel')">Front axel</button>
				<button class="w1" onclick="displayContent('Front Steering and Suspension')">Front Steering and Suspension</button>
				<button class="w1" ><b>Back part</b></button>
				<button class="w1" onclick="displayContent('Brakes')">Brakes</button>
				<button class="w1" onclick="displayContent('Catalytic Converter')">Catalytic Converter</button>
				<button class="w1" onclick="displayContent('Muffler')">Muffler</button>
				<button class="w1" onclick="displayContent('Fuel Tank')">Fuel Tank</button>
				<button class="w1" onclick="displayContent('Rear Axle')">Rear Axle</button>
				<button class="w1" onclick="displayContent('Rear Suspension')">Rear Suspension</button>
		</td></tr>
   </table>
   <table width="100%" height="200px">
   	<tr><td width="50%">
   		 <img   src="pictures/front.png" width="100%" height="100%">
   	</td>
   	<td>
   		 <img   src="pictures/back23.png" width="100%" height="100%">
   	</td>
   </tr>
   </table>
   <table width="100%" height="auto">
   	<tr><td>
   		<div class="container" id="targetContainer">
   	</td></tr>
   </table>
   <script type="text/javascript">
   	function displayContent(buttonId) {
  var targetContainer = document.getElementById("targetContainer");
  var content = "";

  if (buttonId === "engine") {
  	content="<h1>ENGINE</h1>"
    content = "The heart and soul of your vehicle is the internal combustion engine. The engine block features parts such as the timing chain, camshaft, crankshaft, spark plugs, cylinder heads, valves and pistons.In this article, we'll discuss the basic idea behind an engine and then go into detail about how all the pieces fit together, what can go wrong and how to increase performance <br/>The purpose of a gasoline car engine is to convert gasoline into motion so that your car can move. Currently the easiest way to create motion from gasoline is to burn the gasoline inside an engine. Therefore, a car engine is an internal combustion engine — combustion takes place internally.<br/>";
    
  } else if (buttonId === "Transmission") {
    content = "Content for Button 2";
  } else if (buttonId === "Battery") {
    content = "Content for Button 3";
  }

  // Create a new paragraph element
  var newParagraph = document.createElement("p");

  // Set the text content of the paragraph to the corresponding content
  newParagraph.textContent = content;

  // Append the paragraph to the target container
  targetContainer.appendChild(newParagraph);
}
   </script>
</body>
</html>