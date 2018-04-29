<?php
$dbname="Webtech_project";
$username="root";
$password="";
$host="localhost";
$login=false;
$myconnection=mysqli_connect($host,$username,$password,$dbname);

$unameErr = $emailErr  = $passwordErr = $noMatchErr = "";
$emailErr2="";
$emailErr1 = $pwordErr1 = $wrongPassErr = "";
$uname = $pword1 = $pword2 = $email = $email1 = $pword3 = "";

if (empty($_POST["email1"])) {
  $emailErr1 = "";
} else {
  $email1 = test_input($_POST["email1"]);
  if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
  $emailErr1 = "Invalid email format";
}}
if (empty($_POST["pword3"])) {
  $pwordErr1 = "Password Required";
} else {
  $pword3 = test_input($_POST["pword3"]);
  $query = "SELECT * FROM `user` WHERE email='".$email1."'AND Password='".$pword3."'";
  $results=mysqli_query($myconnection,$query);

  if(mysqli_num_rows($results)!=1)
    {
      $noMatchErr="Email Id and Password dont match!";
      $login="login";
	}
  else
  {
    $details=mysqli_fetch_assoc($results);
    session_start();
    $_SESSION['email']=$details['email'];
    $_SESSION['password']=$details['Password'];
    $_SESSION['Username']=$details['Username'];
  }
}
if (isset($_SESSION['email'])){
  $username = $_SESSION['email'];
  $fnameErr = $emailErr = $lnameErr = $passwordErr = $noMatchErr = $addressErr = "";
  $emailErr1 = $pwordErr1 = $wrongPassErr = "";
  $login=true;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <style media="screen">
      *{
        outline: none;
        font-family: verdana;
      }
      body {
        margin: 0;
        padding: 0;
      }
	  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #2b2b2b;
}

#logo {
  float: left;
  cursor: pointer;
}
li {
    float: right;

}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 18px 16px;
    text-decoration: none;

}

li a:hover {
    background-color: #111;
    color: #1087cc;
}

.dropdown-content a:hover {
    background-color: white;
    color: #1087cc;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #2b2b2b;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #111}

.dropdown:hover .dropdown-content {
    display: block;
}
      .form {
        margin-left: 33%;
        margin-top: 5%;
        width: 34%;
    	  height:65%;
        position: absolute;
        z-index: 5;
        border: 1px solid black;
        background-color: #2b2b2b;
        border-radius: 15px;
      }
      #background{
        opacity: 0.25;
        z-index: -1;
        position: fixed;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
      }
      input[type=text], input[type=password],input[type=email] {
        width: 80%;
        padding: 3% 5%;
        margin: 5%;
        margin-left: 10%;
        margin-top: 3%;
        display: block;
        border: 0.3px solid #ccc;
        box-sizing: border-box;
        background-color: white;
        border-radius: 20px;
      }
      .button {
        background-color: #1087cc;
        color: white;
        border-radius: 15px;
        height: 40px;
        margin-left: 10%;
        width: 80%;
        border: none;
        cursor: pointer;
      }
      label {
        font-size: 25px;
        margin: 5%;
        margin-bottom: 3%;
        margin-left: 10%;
        color: white;
      }
      h1 {
        text-align: center;
        color: white;
      }
	  label .req {
    margin: 2px;
    color: #1ab188;
  }
    </style>
  </head>
  <body>
	<ul>
	  <li id="logo"><img src="image.jpg"/></li>
	  <li><a href="login.php" id="createBtn">Create Account</a></li>
	  <li><a href="log.php" id="signinBtn">Sign In</a></li>
	  <li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Songs</a>
		<div class="dropdown-content">
		  <a href="newreleases.php">New Releases</a>
		  <a href="top10.php">Top 10</a>
		  <a href="playlist.php">Top Playlist</a>
		</div>
		<li><a href="index.php">Home</a></li>
	  </li>
	</ul>
    <div class="container">
      <img id="background" src="albumart.png" alt="background image">
      <div class="form">
        <form class="" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
          <h1>Sign In</h1>
          <label>Email<span class="req">*<?php echo $emailErr1;?></span></label>
          <input type="email" name="email1" placeholder="  Enter your Email">
          <label>Password<span class="req">* <?php echo $noMatchErr;?></span></label>
          <input type="password" name="pword3" placeholder="  Enter your Password">
          <input class="button" type="submit" value="Sign In">
        </form>

      </div>
  </div>
  </body>
  <script>
		var s="<?php echo $login;?>";
		if(s==true)
		{
			var signin=document.getElementById("signinBtn");
			signin.innerHTML="Hello "+"<?php echo $_SESSION['Username']; ?>";
			var create=document.getElementById("createBtn");
			create.innerHTML="Logout";
			create.setAttribute("href","logout.php");
			window.location.href="index.php";
		}
  </script>
</html>
