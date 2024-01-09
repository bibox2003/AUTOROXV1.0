<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pay</title>
</head>
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
		h1.kl{
			text-align: center;
			font-family: monospace;
			font-size: 18px;
			font-weight: bold;
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
		button.b{
			width: 100% ;
			height: 300px;
			border: none;
			outline: none;
			margin-left: ;
			ustom-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #f1f1f1;
		}

		inou.a12{
			text-align: left;
			width: 150px;
			height: 30px;
			float: left;
			margin-left: 28%;
			border-radius: 30px;
			padding: 5px ;
			font-family: monospace;
			background-color: transparent;
			opacity: 0.5px;
			color: black;


		}
		.b1{
			text-align: left;
			width: 150px;
			height: 30px;
			float: right;
			margin-right: 25%;
			border-radius: 30px;
			padding: 5px ;
			font-family:monospace;
			background-color: transparent;
			opacity: 0.5px;
			color: black;

		}
		inout.

</style>
<body>
   <table height="120px" width="100%">
  	<tr><td class="kl" height="90px">
  		<img  class="w" src="pictures/t1.png" width="20%" height="80px">
  	</td></tr>
  </table>
   <h1 class="kl">Select a payment method:</h1>
  <table width="100%" height="300px" >
  	<tr><td><h1 class="kl">VISA:</h1>
  		<button class="b" onclick="openLoginForm()"><a href="#" id="myButton" ><img  src="pictures/visa.gif" width="100%" height="400px" ></a></button>
  		<div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeLoginForm()">&times;</span>
      <h2>Enter your card details to pay:</h2>
      <form>
        <input class="a1" type="text"  name="amount" placeholder="Amount" required><br>
        <input class="a1" type="text" name="name" placeholder="Name on card" required><br>
        <input class="a1" type="text"  name="amount" placeholder="Card details" required><br>
        <input class="a1" type="card"  name="amount" placeholder="MM/YYYY" required><br>
        <input class="a1" type="text"  name="amount" placeholder="CVV" required><br><br>
        <input class="g1" type="submit" name="submit" value="pay" size="20px">
      </form>
    </div>
  	</td>
  	<td> <h1 class="kl">AIRTEL</h1>
  		<button class="b" onclick="openLoginForm()"><a href="#" id="myButton" ><img  src="pictures/air.gif" width="100%" height="400px" ></a></button>
  		<div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeLoginForm()">&times;</span>
      <h2>enter recepient</h2>
      <form>
        
        <input class="a1" type="text" id="tel" name="tel" placeholder="recepient" required><br>
        <input class="a1" type="text" id="amount" name="amount" placeholder="amount" required><br>
        <input class="g1" type="submit" name="submit" value="pay" size="20px">
      </form>
    </div>
  	</td>
  	<td><h1 class="kl">MTN</h1>
     <button class="b" onclick="openLoginForm()"><a href="#" id="myButton" ><img  src="pictures/mtn.gif" width="100%" height="400px" ></a></button>
  		<div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeLoginForm()">&times;</span>
      <h2>enter recepient</h2>
      <form>
        
        <input class="a1" type="text" id="tel" name="tel" placeholder="recepient" required><br>
        <input class="a1" type="text" id="amount" name="amount" placeholder="amount" required><br>
        <input class="g1" type="submit" name="submit" value="pay" size="20px">
      </form>
    </div>
  	</td></tr>
  </table>
  <table  id="paymentTable">
  	
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