<!DOCTYPE html>
<html>
<head>
<title> Rhapsody </title>
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="modal.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="index.js" defer></script>
<script type="text/javascript" src="modal.js" defer></script>
</head>
<body>

<?php
  extract($_POST);
  $conn=mysqli_connect("localhost","root","","Webtech_project");
  if(!$conn)
  {
    echo mysqli_connect_error();
    echo "Error";
  }
  else
  {
    $query="Select * from Users";
    $res=mysqli_query($conn,$query);
    echo "<br/>";
    $count=mysqli_num_rows($res);
    for($i=0;$i<$count;$i++)
    {
      $row=mysqli_fetch_assoc($res);  //associative array(reads first row and converts to associative array)
      if(($uname==$row['Username'])&&($psw==$row['Password']))
      {	
			echo" <ul>";
			echo"<li id="logo"><img src="image.jpg"/></li>";
			echo"<li><a href="#" id="User">Hello $uname</a></li>";
			echo" <li class="dropdown">";
			echo" <a href="javascript:void(0)" class="dropbtn">Songs</a>";
			echo" <div class="dropdown-content">";
			echo"<a href="new.html">New Releases</a>";
			echo "<a href="top100.html">Top 100</a>";
			echo"<a href="top.html">Top Playlist</a>";
			echo"</div>";
			echo"<li><a href="5-1.html">Home</a></li>";
			 echo" </li>";
			 echo"</ul>";
			echo" <div class="slideshow-container">";
			 echo"<div class="mySlides fade">";

			 echo"<img src="img1x.jpg" style="width:100%">";

			echo" </div>";
			echo" <div class="mySlides fade">";
			 echo"  <img src="img2x.jpg" style="width:100%">";

			 echo"</div>";

			 echo"<div class="mySlides fade">";

			  echo"<img src="img6x.jpg" style="width:100%">";

			 echo"</div>";

			 echo"<button class="arrowleft"  onclick="plusSlides(-1)"><span style="font-size:30px">&#10094;</span></button>";
			 echo"<button class="arrowright"  onclick="plusSlides(+1)"><span style="font-size:30px">&#10095;</span></button>";


			 echo"</div>";
			 echo"<br>";

			 <!-- <a class="arrow prev" onclick="plusSlides(-1)"><span style="font-size:30px">&#10094;</span></a>
			 <a class="arrow next" onclick="plusSlides(1)"><span style="font-size:30px">&#10095;</span></a>

			 <button class="button button1">Sign In</button>
			 <button class="button button2">Create Account</button> -->
			echo" <div style="text-align:center">";
			 echo" <span class="dot" onclick="currentSlide(1)"></span>";
			echo "<span class="dot" onclick="currentSlide(2)"></span>";
			 echo"  <span class="dot" onclick="currentSlide(3)"></span>";
			echo" </div>";

      
        break;
      }
    }
  }
 ?>


</body>
</html>
