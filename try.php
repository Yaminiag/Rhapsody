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
<link href="playlist.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<ul>
  <li  id="logo"><img src="image.jpg"/></li>
  <li><a href="#home" id="createBtn">Create Account</a></li>
  <li><a href="#news" id="signinBtn">Sign In</a></li>
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
</ul>
<ul id="rig">
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="mj.jpg">
            <span class="rig-overlay" onclick="pop(1)"></span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img style="height:100%;"class="rig-img" src="maroon5.jpg">
            <span class="rig-overlay" onclick="pop(2)"></span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="imaginedragons.jpg">
            <span class="rig-overlay" onclick="pop(3)"></span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="fortress.jpg">
            <span class="rig-overlay" onclick="pop(4)"></span>
        </a>
    </li>
</ul>
<div id="popup1" class="popup">
  <img id="popupimg" src="mj.jpg">
  <div id="songs">
    <p onclick='playsong("C:/beatit.mp3")'>1) Beat It</p>
    <p onclick='playsong("C:/blackorwhite.mp3")'>2) Black or White</p>
	<p onclick='playsong("C:/billiejean.mp3")'>3) Billie Jean</p>
    <p onclick='playsong("C:/thriller.mp3")'>4) Thriller</p>
	<p onclick='playsong("C:/thewayyoumakemefeel.mp3")'>5) The way you make me feel</p>
    <p onclick='playsong("C:/ijustcantstoplovingyou.mp3")'>6) I just cant stop loving you</p>
  </div>
</div>
<div id="popup2">
  <img id="popupimg" src="maroon5.jpg">
  <div id="songs">
    <p onclick='playsong("C:/sugar.mp3")'>1) Sugar</p>
    <p onclick='playsong("C:/whatloversdo.mp3")'>2) What lovers do</p>
	<p onclick='playsong("C:/moveslikejagger.mp3")'>3) Moves like jagger</p>
    <p onclick='playsong("C:/maps.mp3")'>4) Maps</p>
	<p onclick='playsong("C:/cold.mp3")'>5) Cold</p>
    <p onclick='playsong("C:/animals.mp3")'>6) Animals</p>
  </div>
</div>
<div id="popup3">
  <img id="popupimg" src="imaginedragons.jpg">
  <div id="songs">
    <p onclick='playsong("C:/thunder.mp3")'>1) Thunder</p>
    <p onclick='playsong("C:/believer.mp3")'>2) Believer</p>
	<p onclick='playsong("C:/radioactive.mp3")'>3) Radioactive</p>
    <p onclick='playsong("C:/demons.mp3")'>4) Demons</p>
	<p onclick='playsong("C:/itstime.mp3")'>5) Its time</p>
    <p onclick='playsong("C:/gold.mp3")'>6) Gold</p>
  </div>
</div>
<div id="popup4">
  <img id="popupimg" src="fortress.jpg">
  <div id="songs">
    <p onclick='playsong("C:/soundofwalkingaway.mp3")'>1) Sound of walking away</p>
    <p onclick='playsong("Silence.mp3")'>2) Silence</p>
	<p onclick='playsong("C:/takingmehigher.mp3")'>3) Taking me higher</p>
    <p onclick='playsong("C:/neededyou.mp3")'>4) Needed you</p>
	<p onclick='playsong("C:/letyougo.mp3")'>5) Let you go</p>
    <p onclick='playsong("Fortress.mp3")'>6) Fortress</p>
  </div>
</div>

<div class="footer" id="footer">
  <audio controls autoplay id="music">
  </audio>
 </div>
</body>
<script type="text/javascript">
	var flag="<?php echo $flag; ?>";
		if(flag==1)
		{
			var signin=document.getElementById("signinBtn");
			signin.innerHTML="Hello "+"<?php echo $_SESSION['Username']; ?>";
			var create=document.getElementById("createBtn");
			create.innerHTML="Logout";
			create.setAttribute("href","logout.php");
		}
  var img = document.getElementById('popupimg');
  var songs = document.getElementById('songs');
  var a = document.getElementById('music');
  var footer = document.getElementById('footer');
  function pop(n) {
	console.log(popup);
	if(n==1)
	{
		var popup1 = document.getElementById('popup1');
		var popup2 = document.getElementById('popup2');
		var popup3 = document.getElementById('popup3');
		var popup4 = document.getElementById('popup4');
		popup1.style.display = "block";
		popup2.style.display = "none";
		popup3.style.display = "none";
		popup4.style.display = "none";
		a.pause();
	}
	if(n==2)
	{
		var popup1 = document.getElementById('popup1');
		var popup2 = document.getElementById('popup2');
		var popup3 = document.getElementById('popup3');
		var popup4 = document.getElementById('popup4');
		popup1.style.display = "none";
		popup2.style.display = "block";
		popup3.style.display = "none";
		popup4.style.display = "none";
		a.pause();
	}
	if(n==3)
	{
		var popup1 = document.getElementById('popup1');
		var popup2 = document.getElementById('popup2');
		var popup3 = document.getElementById('popup3');
		var popup4 = document.getElementById('popup4');
		popup1.style.display = "none";
		popup2.style.display = "none";
		popup3.style.display = "block";
		popup4.style.display = "none";
		a.pause();
	}
	if(n==4)
	{	var popup1 = document.getElementById('popup1');
		var popup2 = document.getElementById('popup2');
		var popup3 = document.getElementById('popup3');
		var popup4 = document.getElementById('popup4');
		popup1.style.display = "none";
		popup2.style.display = "none";
		popup3.style.display = "none";
		popup4.style.display = "block";
		a.pause();
	}
  }
  function playsong(x) {
	a.src=x;
	footer.style.display = "block";
  }
</script>
</html>
