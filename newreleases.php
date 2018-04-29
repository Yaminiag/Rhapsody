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
<link href="newreleases.css" rel="stylesheet" type="text/css" />
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
<ul id="rig">
	<li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="Kids In Love.jpg">
            <span class="rig-overlay" onclick="f('Kids In Love')"></span>
            <span class="rig-text" onclick="f('Kids In Love')">Play Now</span>
        </a>
    </li>
	<li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="Unforgettable.jpg">
            <span class="rig-overlay" onclick="f('Unforgettable')"></span>
            <span class="rig-text" onclick="f('Unforgettable')">Play Now</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="Fortress.jpg">
            <span class="rig-overlay" onclick="f('Fortress')"></span>
            <span class="rig-text" onclick="f('Fortress')">Play Now</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="There's Nothing Holdin' Me Back.jpg">
            <span class="rig-overlay" onclick='f("There&apos;s Nothing Holdin&apos; Me Back")'></span>
            <span  class="rig-text" onclick='f("There&apos;s Nothing Holdin&apos; Me Back")'>Play Now</span>
        </a>
    </li>
    
    
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="Subeme La Radio.jpg">
            <span class="rig-overlay" onclick="f('Subeme La Radio')"></span>
            <span class="rig-text" onclick="f('Subeme La Radio')">Play Now</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="Sign of the Times.jpg">
            <span class="rig-overlay" onclick="f('Sign of the Times')"></span>
            <span class="rig-text" onclick="f('Sign of the Times')">Play Now</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" href="#">
            <img class="rig-img" src="I Got You.jpg">
            <span class="rig-overlay" onclick="f('I Got You')"></span>
            <span class="rig-text" onclick="f('I Got You')">Play Now</span>
        </a>
    </li>
    <li>
        <a class="rig-cell" id="8" href="#">
            <img class="rig-img" src="Silence.jpg">
            <span class="rig-overlay" onclick="f('Silence')"></span>
            <span class="rig-text" onclick="f('Silence')" >Play Now</span>
        </a>
    </li>
</ul>
<div class="footer" id="footer">
  <audio controls autoplay id="music">
  </audio>
  <img id="simg"></img>
  <p id="sgn"></p>
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
    function f(source)
    {
      var d=document.getElementById('footer');
      var a=document.getElementById("music");
      var b=document.getElementById("simg");
      var c=document.getElementById('sgn');
      d.style.display="block";
      a.src=source+".mp3";
      a.type="audio/mpeg";
      b.src=source+".jpg";
      c.innerHTML=source;
    }
  </script>
</html>
