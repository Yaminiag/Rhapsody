<?php
$dbname="Webtech_project";
$username="root";
$password="";
$host="localhost";
$signup=false;
$myconnection=mysqli_connect($host,$username,$password,$dbname);

$unameErr = $emailErr  = $passwordErr = $noMatchErr = "";
$emailErr2="";
$emailErr1 = $pwordErr1 = $wrongPassErr = "";
$uname = $pword1 = $pword2 = $email = $email1 = $pword3 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["uname"])) {
    $unameErr = "Name is required";
  }
  else {
    $uname = test_input($_POST["uname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
      $unameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
  else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["pword1"])) {
    $passwordErr = "Password is required";
  } else {
    $pword1 = test_input($_POST["pword1"]);
  }

  if (empty($_POST["pword2"])) {
    $passwordErr = "Confirm password required";
  } else {
    $pword2 = test_input($_POST["pword2"]);
  }
}
if($pword1!=$pword2)
{
  $passwordErr = "Passwords dont match.";
}

$query10="SELECT * FROM `user` WHERE `email`='".$email."'";
$results10=mysqli_query($myconnection,$query10);
if(mysqli_num_rows($results10)>0 && !isset($_SESSION['email']))
{
	echo "<script> alert('user exists');</script>";
}
 // $emailErr="User ID already exists";
	



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($pword1==$pword2 && $emailErr=="" && $unameErr==""  && $passwordErr=="" && $emailErr=="" &&(!isset($_SESSION['email'])) && (!isset($_SESSION['uname'])) && (!isset($_SESSION['password'])))
{
  // echo "h";
  if(!empty($_POST["uname"])&&!empty($_POST["pword1"])&&!empty($_POST["pword2"])&&!empty($_POST["email"]))
  {
    $query1 = "INSERT INTO `user` (Username,email,Password) VALUES ('".$uname."','".$email."','".$pword1."')";
    $results = mysqli_query($myconnection,$query1);
	$signup=true;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Account</title>
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
        margin-top: 3%;
        width: 34%;
    	  height:85%;
        position: absolute;
        z-index: 5;
        border: 1px solid black;
        background-color: #2b2b2b;
        border-radius: 15px;
      }
		#background {
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
        margin: 3%;
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
        font-size: 20px;
        margin: 3%;
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
          <h1>Create Account</h1>
          <label >Username<span class="req">*<?php echo $unameErr;?></label>
          <input type="text" name="uname" placeholder=" Enter your Username">
          <label >Email<span class="req">*<?php echo $emailErr1;?></span></label>
          <input type="email" name="email" placeholder=" Enter your Email">
          <label >Password<span class="req">* <?php echo $passwordErr;?></label>
          <input type="password" name="pword1" placeholder=" Enter your Password">
          <label >Confirm Password<span class="req">* <?php echo $passwordErr;?></label>
          <input type="password" name="pword2" placeholder=" Confirm Password ">
          <input class="button" type="submit" value="Sign In">
        </form>

      </div>
  </div>
  </body>
  <script>
	var s="<?php echo $signup;?>";
	if(s==true)
	{
	  window.location.href="log.php";
	}
	</script>
</html>