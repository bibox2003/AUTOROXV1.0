<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact</title>
	<style type="text/css">
		*{
    margin: 0%;
}

.p2{
    display: flex;
    flex-direction: column;
    height: 500px;
    width: 400px;
    border: 1px solid black;
    align-items: center;
    margin: auto;                           
    margin-top: 5%;          
    background-image: linear-gradient(#036787,#026733);
    box-shadow: 2px 3px 5px;
    border-radius: 12px;

    
}
.p2 h1{
    color:white;
    font-size: 50px;
    border-bottom: 4px solid darkgrey;
    margin: 50px; 
}
.label{
    padding: 12px;
    margin: 20px;
    width: 65%;
    border: none;
    background-color:whitesmoke;
    border-radius: 6px;
    font-size: 30px;
}
#submit{
    padding: 10px 20px;
    margin-top: 50px;
    width: 50%;
    background-color: black;
    color: whitesmoke;
    font-size: 20px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
}
nav{
    width: 100%;
    height: 75px ;
    background-image: linear-gradient(#033747,#012733);
   top: 0;
   left: 0;
  
}
nav .logo{
    margin-top: 1.2%;
    font-size: 30px;
    font-weight: bold;
    float: left;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    cursor: pointer;
   
}
nav ul{
    float: right;
    margin-right: 3%;
    margin-top: 1.2%;
}
nav li{
    display: inline-block;
}
nav li a{
    font-size: 18px;
    text-transform: uppercase;
    padding: 35px 30px;
    color: white;
    text-decoration: none;
    
}
nav li:hover a{  

transition: 3s;
background-color:#ff8c69 ;
border-radius: 3px;

}
.nav1{
    display: flex;
   
}
.nav2{
    height: 50px;
    width: 20%;
    margin-top: 3%;
    margin-left: 10%;
}
.nav2 select{
    padding: 10px 12px;
    width: 80%;
    background-color: rgb(44, 44, 1);
    color: whitesmoke;
    font-size: 23px;
    border-radius: 12px;
    box-shadow: 2px 2px 5px black;
}
.gallery{
    margin-left: 4%;
    
   
}
.cards{
    width: 20%;
    background-color:whitesmoke;
    border-radius: 5px;
    box-shadow: 2px 2px 2px black;
    display: inline-block;
    margin: 20px;
    
    }
    .cards:hover {
        box-shadow: 2px 2px 8px black;
        background-color:seashell;
      
    }
    .gallery img{
        width: 100%;
        height: 200px;
    }
    .card0 img{
       
        border-radius: 5px;
    }
    .card1{
        margin: 10px;
    }
    .card1 p{
        text-align: left;
        font-size: 25px;
        font-weight: 600;
    
    }
    .card1 h3{
        color: rgb(103, 103, 2);
        text-decoration: underline;
        font-size: 20px;
    }
    .card2{
        text-align:left;
        height: 100px;
    }
    .card2 p{
        color: red;
        font-size: 25px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    
    }
   
    .card2 button{
        margin-left: 10%;
        margin-top: 9%;
        padding: 10px 9px;
        background-color: rgb(19, 19, 252);
        color: whitesmoke;
        border-radius: 10px;
    }
    .card2 button:hover{
        background-color: black;
        color: whitesmoke;
        transition: 1s;
    }
.but{
   float: right;
   margin-right: 5%;
   padding: 0px 15px;
   margin-top: 1.2%;
}
.but1{
    padding: 8px;
    background-color:#ff8c69;
    color: whitesmoke;
    font-size: 20px;
    border-radius: 12px;
    border: none;
    box-shadow: 2px 2px 5px black;
    text-transform: uppercase;
    cursor: pointer;
}
.but1:hover{
    box-shadow: 2px 2px 70px black;}
.foo{
    height: 500px;
    background-color: #012733;
}
footer{
    background-color: #033747;
    bottom: -100px;
    width: 100%;
    height: 300px;
    position: relative;

     
}
.container{
    width: 100%;
    margin: auto;
    display: flex;
    justify-content: center;

}
.footer-content{

    width: 33.3%;
}
.footer-content i{
    height: 40px;
    width: 20%;
    font-size: 50px;
    color: whitesmoke;
    
}
.footer-content i:hover{
    color: #ff8c69;
}
.footer-content h3{
    font-size: 42px;
    margin-bottom: 15px;
    text-align: center;
    color: whitesmoke;
    text-transform: uppercase;
}
.footer-content p{
    width: 190px;
    margin: 20px;
    font-size: 30px;
    font-weight: 500px;
    
}
.footer-content ul{
    text-align: center;

}
.list{
    padding: 0;
}
.footer-content ul li{
    width: auto;
    text-align: center;
    list-style-type: none;

}
.bottom-bar{
    height: 50px;
    width: 100%;
    background-color: white;
    bottom: 0%;
    position: absolute;
    text-align: center;
    font-weight: 500;
}
.bottom-bar p{
    font-size: 40px;
}
.search{
    margin: auto;
    margin-top: 4%;
    margin-bottom: 3%;
    position: relative;
    height: 42px;
    width: 300px;
     border: 4px solid #012733;
     padding:0px 20px;
     border-radius: 12px;
     margin-left:35%;
     
    
}
.search1{
    width: 100%;
    height: 100%;
    vertical-align: middle;

}
.search2{
    border: none;
    height: 100%;
    padding:0px 5px;
    border-radius: 50px;
     font-size: 18px;
     font-weight: 500;
     outline: none;

}
.prop{
    height: 500px;
    width: 70%;
    background-color:white;
    margin: auto;
    margin-top: 7%;
   
}
.bar{
    width: 90%;
    height: 100px;
    background-color: #020717;
  margin: 10px;
    margin-top: 2%;
    border-radius: 20px;
    text-align: center;
    box-shadow: 2px 3px 5px #ff8c69;
    


}
.bar a{
    color:white;
    font-size: 40px;

}
.bar a:hover{
    color:#ff8c69;
}
.contact1{
    width: 40%;
    height: 500px;
    background-color:white;
    display: flex;
    flex-direction: column;
    padding:40px;
    margin-left: 40%;
    border: 2px solid black;
    border-radius: 15px;
    box-shadow:2px 2px 5px #310f04;
    text-align: center;
   margin: auto;
    


}
.lab{
    padding: 12px;
    margin: 20px;
    border-radius: 12px;
  border: none;
  width: 60%;
  background-color: #e7f054f5;
  box-shadow: 2px 2px 5px;
  font-size: 20px;

}
.contact1 textarea{
    height: 90px;
    width: 90%;
    margin: auto;
    background-color: #e7f054f5;
    border-radius: 15px;
    box-shadow: 2px 2px 5px #f4f7f8;
    font-size: 20px;
}
.contact1 h1{
    color:#033747;
    text-transform:uppercase;
    font-size: 40px;
    text-decoration: underline;
 
}
#submit{
    padding: 10px 20px;
    margin-top: 50px;
    width: 30%;
    background-color: black;
    color: whitesmoke;
    font-size: 20px;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    margin: auto;
}
#submit:hover{
    background-color:#012733;
}
.details
{
    height: 300px;
    width: 30%;
    background-color: whitesmoke;
    display: inline-block;padding: 15px 15px;
    margin-top: 6%;
    border: 10px solid #012733;
}
.details h1{
    text-align: center;
    margin-top: 11%;
    font-size: 60px;
    color: #033747;
    font-weight: 500;
}
.side{
    height: 600px;
    width: 50%;
    background-color: whitesmoke;
    display: inline-block;
    padding: 15px;
    margin: 2%;
    border-radius: 200px;
   margin-left: 3%;
    
 
}
.container{
    margin: auto;
    
}
.ads{

}
.home1{
    background-color: #028733;
    height: 150px;
    width: 45%;
    margin: 20px;
    display: inline-block;

}
.home1 img{
    height: 100%;
    width: 100%;
    border: 2px solid #020717;
}

.home2{
    background-color: #028733;
    height: 150px;
    width: 45%;
    margin: 20px;
    display: inline-block;
    
}
.home2 img{
    height: 100%;
    width: 100%;
    border: 2px solid #020717;
}
.home3{
    margin-left: 4%;
}

.home4{
    background-color: #028733;
    height: 500px;
    width: 30%;
    margin: 20px;
    display: inline-block;
}
.home3 img{
    height: 100%;
    width: 100%;
}
.home5{
    background-color: #028733;
    height: 500px;
    width: 30%;
    margin: 20px;
    display: inline-block;
}
.home6{
    background-color: #028733;
    height: 500px;
    width: 30%;
    margin: 20px;
    display: inline-block;
}
.about1{
  display: flex;
  flex-direction: column;
  margin-left: 20%;


}
.about2{
    height: 120px;
    width: 70%;
    background-color:white;
    margin-left: 6%;
}
.about2 h1{
    font-size: 70px;
    text-align: center;
    margin-top: 5%;
    color:#355E3B;
   
}
.about3{
    height: 800px;
    width: 80%;
    background-color: whitesmoke;
    margin: 20px;
    border: 2px solid black;
    
}
.about3 h1{
    font-size: 40px;
    color: #033747;
    text-align: center;

}
.about3 p{
    font-size: 30px;
    color: black;
    font-weight: 500;
    margin: 20px;
}
.sign{
    height: 850px;
    width: 50%;
    background-color:whitesmoke;
    display: flex;
    flex-direction: column;
    padding: 13px;
    margin: auto;
    align-items: center;
    box-shadow: 2px 2px 6px;
   border-radius: 20px;
}
.sign h1{
    text-align: center;
    font-size: 40px;
    color: #033747;
    border-bottom: 5px solid #ff8c69;
}
.signlabel{
padding: 15px;
width: 70%;
margin-left: 32%;
margin-bottom: 10px;
font-size: 25px;
border-radius: 16px;
border:2px solid #ff8c69;;
}
.sign p{
    font-size: 20px;
    margin-left: 36%;
}
.sign1{
    margin-top: 4%;
    margin-right:7%;
}
.signbut{
    background-color: rgb(7, 7, 74);
    color: white;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 3%;
    margin-left: 35%;
    height: 50px;
    width: 80px;
    font-size: 25px;
    border-radius: 15px;
    box-shadow: 2px 2px 10px #033747;
}
.error-message {
        background-color: #ff0000;
        color: #ffffff;
        padding: 10px;
    }

.success-message {
        background-color: #00ff00;
        color: #ffffff;
        height: 200px;
        width: 30%;
    }

	</style>
</head>
<body>
      <nav>
            <div class="logo">
       <p>DREAM P</p>
            </div>
            <div class="but">
            <button class="but1" onclick="document.location='login.php'">login</button>
            <button class="but1" onclick="document.location='signup.php'">signup</button></div>
            <ul>
           <li><a href="index.php">Home</a></li> 
          <li><a href="property.php">property</a></li>
          <li><a href="contact.php">contact us</a></li>
            <li><a href="about.php">about us</a></li></ul>
        </nav>
        <div class="search">
            <table class="search1">
                <tr><td><input type="text" placeholder="Search" class="search2"></td>
                <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></td></tr>
            </table>
        </div><div class="container">
       <?php
$server = "localhost";
$user = "root";
$password = "";
$db = "auto";
$con = mysqli_connect($server, $user, $password, $db);

if (isset($_POST['submit'])) {
    // Retrieve the logged-in user's ID from the session variable
    $user_id = $_SESSION['id'];

    $username = $_POST['username'];
    $email = $_POST['email'];
    $telnbr = $_POST['telnbr'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO contactus(id, username, email, telnbr, comment) VALUES ('$user_id', '$username', '$email', '$telnbr', '$comment')";
    $res = mysqli_query($con, $query);

    if (!$res) {
        $errorMessage = "Message not recorded: " . mysqli_error($con);
        echo '<div class="error-message">' . $errorMessage . '</div>';
    } else {
        $successMessage = "Message recorded successfully.";
        echo '<div class="success-message">' . $successMessage . '</div>';
    }
}
?>
      <div class="details">
        <h1>ASK ANY QUESTION YOU WANT!</h1>
      </div>
      <div class="side">
        <div class="contact1">
            <h1>contact us</h1>
         <form action="" method="POST">
                <input type="text" class="lab" name="username" placeholder="username" required>
                <input type="email" class="lab" name="email" placeholder="email" required>
                <input type="number" class="lab" name="telnbr" placeholder="phone number" required>
                <textarea class="area" name="comment" placeholder="write your message here!" required></textarea>
                <button id="submit" name="submit">send</button>          
</form>
        </div>
      </div></div>
        
        <footer>
            <div class="container">
                <div class="footer-content">
                  <h3>contact us</h3>
                  <p>email:rubdavid20@gmail.com</p>
                <p>phone:+250786440779</p>
                <p>address: </p>
                </div>
                <div class="footer-content">
                    <h3>quick links</h3>
                    <ul class="list">
                        <li><a href="#">home</a></li>
                    </ul>
                </div>
                <div class="footer-content">  
                    <h3>follow us</h3><ul>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li></ul>
            </div></div>
             <div class="bottom-bar">
                <p>&copy;2023 Dream Property.All rights reserved</p>
             </div></footer> 
</body>
</html>