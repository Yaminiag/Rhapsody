<?php
	session_start();
	if(isset($_SESSION['Username']))
		$flag=1;
	if(!isset($_SESSION['Username']))
	{
		$flag=0;
		header("Location: login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
<title> Rhapsody </title>
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="top10.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<ul>
  <li id="logo"><img src="image.jpg"/></li>
  <li><a href="" id="createBtn">Create Account</a></li>
  <li><a href="" id="signinBtn">Sign In</a></li>
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
<div id="bod">


<div id="left">

<div id="contains" onclick="window.location.href='dusktilldawn.php';">
 <div id="box">1</div>
 <div id="sgcontainer">
  <img id="sgimg" src="dusktilldawn_cover.jpg">
  <br/>
  Dusk till Dawn </br>
  Zayn Malik
</div>
</div>

<div id="contains" onclick="window.location.href='havana.php';">
 <div id="box">3</div>
 <div id="sgcontainer">
  <img id="sgimg" src="havana_cover.jpg">
  <br/>
  Havana</br>
  Camila Cabello Featuring Young Thug
</div>
</div>

<div id="contains" onclick="window.location.href='stargazing.php';">
 <div id="box">5</div>
 <div id="sgcontainer">
  <img id="sgimg" src="stargazing_cover.jpg">
  <br/>
  Stargazing</br>
  Kygo
</div>
</div>

<div id="contains" onclick="window.location.href='thereforyou.php';">
 <div id="box">7</div>
 <div id="sgcontainer">
  <img id="sgimg" src="thereforyou_cover.jpg">
  <br/>
  There for you </br>
  Martin Garrix ,Troye Sivan
</div>
</div>

<div id="contains" onclick="window.location.href='starboy.php';">
 <div id="box">9</div>
 <div id="sgcontainer">
  <img id="sgimg" src="starboy.jpg">
  <br/>
  Starboy </br>
  The Weekend
</div>
</div>
</div>


<div id="right">

<div id="contains" onclick="window.location.href='scaredtobelonely.php';">
 <div id="box">2</div>
 <div id="sgcontainer">
  <img id="sgimg" src="scaredtobelonely_cover.png">
  <br/>
  Scared to be lonely </br>
  Martin Garrix, Dua Lipa
</div>
</div>

<div id="contains" onclick="window.location.href='ghoststories.php';">
 <div id="box">4</div>
 <div id="sgcontainer">
  <img id="sgimg" src="ghoststories_cover.jpg">
  <br/>
  Ghost Stories</br>
  Coldplay
</div>
</div>

<div id="contains" onclick="window.location.href='uptownfunk.php';">
 <div id="box">6</div>
 <div id="sgcontainer">
  <img id="sgimg" src="uptownfunk_cover.jpg">
  <br/>
	Uptown Funk</br>
	Bruno Mars
</div>
</div>

<div id="contains" onclick="window.location.href='thunder.php';">
 <div id="box">8</div>
 <div id="sgcontainer">
  <img id="sgimg" src="thunder_cover.jpg">
  <br/>
  Thunder </br>
  Imagine Dragons
</div>
</div>

<div id="contains" onclick="window.location.href='closer.php';">
 <div id="box">10</div>
 <div id="sgcontainer">
  <img id="sgimg" src="closer.jpg">
  <br>
  Closer </br>
  The Chainsmokers 
</div>
</div>
</div>
</div>
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
