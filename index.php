<?php
	session_start();
	$logout=0;
	if(isset($_SESSION['Username']))
		$flag=1;
	if($logout!=0){
		if(!isset($_SESSION['Username']))
		{
			$flag=0;
			header("Location: login.php");
			exit();
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title> Rhapsody </title>
<link href="index.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="index.js" defer></script>

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
<div class="slideshow-container">
<div class="mySlides fade">

  <img src="scaredtobelonely.jpg" style="width:100%">

</div>

<div class="mySlides fade">

  <img src="ghoststories.jpg" style="width:100%">

</div>

<div class="mySlides fade">

  <img src="starboy.jpg" style="width:100%">

</div>

<button class="arrowleft"  onclick="plusSlides(-1)"><span style="font-size:30px">&#10094;</span></button>
<button class="arrowright"  onclick="plusSlides(+1)"><span style="font-size:30px">&#10095;</span></button>

</div>
<br/>

</body>
<script>
	var flag="<?php echo $flag;?>";
	if(flag==1)
	{
		var signin=document.getElementById("signinBtn");
		signin.innerHTML="Hello "+"<?php echo $_SESSION['Username']; ?>";
		signin.setAttribute("href","");
		var create=document.getElementById("createBtn");
		create.innerHTML="Logout";
		create.setAttribute("href","logout.php");
	}
</script>
</html>
