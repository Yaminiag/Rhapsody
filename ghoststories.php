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
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    * {
      z-index: 10;
      font-family: verdana;
    }
    body {
      margin: 0px;
      padding: 0px;
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
		z-index: 20;
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
	#language1{
	margin-left:36.5%;
	margin-top:18.2%;
	font-size:18px;
	position:absolute;
	}
	#language2{
	margin-left:46.5%;
	margin-top:18.2%;
	font-size:18px;
	position:absolute;
	}
	#language3{
	margin-left:56.5%;
	margin-top:18.2%;
	font-size:18px;
	position:absolute;
	}
	#flag1 {
	margin-left:33.5%;
	margin-top:18%;
	position:absolute;
	height:5%;
	width:3%;
	cursor:pointer;
	}
	#flag3{
	margin-left:53.5%;
	margin-top:18%;
	position:absolute;
	height:5%;
	width:3%;
	cursor:pointer;
	}
	#flag2 {
	margin-left:43.5%;
	margin-top:18%;
	position:absolute;
	height:5%;
	width:3%;
	cursor:pointer;
	}
	#spanish{
	display:none;'
	margin-left: 30%;
    margin-top: 25%;
    position: absolute;
    font-size: 17.5px;
    line-height: 30px;
	}
    .backgroundimg {
      width: 100%;
      height: 100%;
      opacity: 0.35;
      position: fixed;
      margin: 0;
      padding: 0;
      z-index: 1;
    }
    .image1 {
      width: 15%;
      height: 30%;
      margin-left: 15%;
      margin-top: 7.5%;
      position: absolute;
    }
	.playbutton{
		margin-left:22.5%;
		margin-top:15.5%;
		position:absolute;
		width:auto;
		height:25%;
		cursor:pointer;
	}

    .imagebackground1 {
      width: 100%;
      margin-left: 0;
      margin-top: 5%;
      height: 40%;
      position: absolute;
      z-index: 5;
      background-color: black;
      opacity: 0.4;
    }
    /* .imagebackground2 {
      width: 62%;
      margin-left: 19%;
      margin-top: 5%;
      height: 40%;
      position: absolute;
      z-index: 6;
      background-color: black;
      opacity: 0.8;
    } */
    .songname {
      margin-left: 33.5%;
      margin-top: 8.5%;
      font-size: 40px;
      color: #1087cc;
      position: absolute;
    }
    .artist {
      margin-left: 33.5%;
      margin-top: 13.5%;
      font-size: 30px;
      position: absolute;
    }
    .lyrics {
      
      margin-top: 25%;
	  margin-left:30%;
	  height:auto;
      position: absolute;
      font-size: 17.5px;
      line-height: 30px;
    }
	.footer {
	  
	  position: fixed;
	  left: 0;
	  bottom: 0;
	  width: 100%;
	  height:8%;
	  background-color: black;
	}
	#footer{
		display:none;
	}
	#music
	{
	  
	  float: left;
	  margin-left:3%;
	  height: 80%;
	  width: 95%;
	}
	
	@media only screen and (max-width: 700px) {
	.lyrics{
	margin-left:10%;
	}
	
    </style>
	
	
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
    <div class="backgroundimg">
      <img src="coldplay.jpg" alt="Ghost Story" style="width:100%;height:100%;opacity:0.35;"></img>
    </div>
    <div>
      <img class="image1" src="ghoststories.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Ghost Stories </p>
    <p class="artist">Coldplay</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		Maybe I'm just a ghost
		Disappear when anybody's close
		Go through you when you try to hold
		Try to hold me near
		 
		Maybe I'm just a ghost
		Emptier than anybody knows
		Maybe I'm on the ropes
		Or I'm not even here
		 
		Yeah!
		 
		Every time I try to walk through walls
		More walls appear
		What's the point of feeling love for you when you don't believe I'm here?
		What's the point of trying to raise your voice if no one ever hears?
		Every time I try to pull you close
		You disappear
		 
		Maybe I'm a ghost
		Just a whisper in a puff of smoke
		A secret that nobody knows
		No one will ever hear
		 
		Or maybe I'm a ghost
		A spectre on a rollercoaster
		A thorn without a rose
		Just something people fear
		 
		Yeah!
		 
		And every time I thought I'd walk through walls
		It's all becoming clear
		What's the point in feeling love for you
		When you don't believe I'm here?
		 
		What's the point in saying 'Rescue me!'
		If no one ever hears?
		Every time I try to pull you close
		You disappear
		Every time I try to pull you close
		You disappear
		 
		And every time I thought I'd walk through walls
		It's all becoming clear
		Every time I try to pull you close
		You disappear
		Every time I try to pull you close
		You disappear
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		Quizás soy sólo un fantasma
		Desaparezco cuando alguien está cerca
		Te atravieso cuando viajas
		Viajas por aquí cerca
		 
		Quizás soy sólo un fantasma
		Vaciado por ellos, nadie lo sabe
		Quizás estoy sobre una rosa
		O ni siquiera estoy aquí?
		Yeah
		 
		Siempre intento caminar a través paredes
		Más paredes aparecen
		Qué sentido tiene sentir amor por ti
		Cuando no crees que estoy aquí?
		Qué sentido tiene intentar elevar tu voz
		Si nadie nunca lo oye?
		Siempre intento acercarte
		Tú desapareces
		 
		Quizás soy un fantasma
		Sólo un susurro en una niebla perfecta
		Un secreto que nadie sabe
		Nadie nunca escuchará
		 
		Oh, quizás soy un fantasma
		Espectro de una causa equivocada
		Espina sin una rosa
		Algo que la gente teme
		Yeah
		 
		Y siempre descubro que estoy cerca de las paredes
		Todo se está volviendo evidente
		Qué sentido tiene sentir amor por ti
		Cuando no crees que estoy aquí?
		Qué sentido tiene decir "Rescátame!"
		Si nadie nunca lo oye?
		Siempre intento acercarte
		Tú desapareces
		Siempre intento acercarte
		Tú desapareces
		 
		Y siempre descubro que estoy cerca de las paredes
		Todo se está volviendo evidente
		Siempre intento acercarte
		Tú desapareces
		Siempre intento acercarte
		Tú desapareces

			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
		Forse sono solo un fantasma
		che scompare quando qualcuno si avvicina,
		ti attraverso quando cerchi di tenermi,
		cerchi di tenermi vicino
		 
		Forse sono solo un fantasma,
		un vuoto a perdere che nessuno conosce.
		Forse sono sull'orlo del precipizio
		o forse non sono nemmeno qui.
		Sì
		 
		Ogni volta che provo ad attraversare i muri,
		più muri appaiono.
		Qual è il senso di essere innamorato di te
		quando tu non ci credi?
		Qual è il senso di provare ad alzare la tua voce
		quando nessuno la sentirà?
		Ogni volta che provo a tirarti più vicino
		tu sparisci
		 
		Forse sono solo un fantasma,
		solo un bisbiglio in una nuvola di fumo,
		un segreto che nessuno conosce,
		che nessuno sentirà
		 
		O forse sono solo un fantasma,
		uno spettro sulle montagne russe.
		Una spina senza rosa,
		qualcosa di cui la gente ha paura.
		Sì
		 
		E ogni volta che pensavo di poter attraversare i muri
		tutto diventava chiaro.
		Qual è il senso di essere innamorato di te
		quando tu non ci credi?
		Qual è il senso di dire "salvatemi"
		quando nessuno sentirà?
		Ogni volta che provo a tirarti più vicino
		tu sparisci
		Ogni volta che provo a tirarti più vicino
		tu sparisci
		 
		E ogni volta che pensavo di poter attraversare i muri
		tutto diventava chiaro.
		Ogni volta che provo a tirarti più vicino
		tu sparisci.
		Ogni volta che provo a tirarti più vicino
		tu sparisci

			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls   id="music" src="Ghost Story.mp3" type="audio/mpeg">
  </audio>
  
  
  
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
		var count=0;
		var f=document.getElementsByClassName('footer');
		var music=document.getElementsByClassName('music');
		var playpause=document.getElementsByClassName('playbutton');
		function english(){
		var l1=document.getElementById("english");
		var l2=document.getElementById("spanish");
		var l3=document.getElementById("italian");
		l1.style.display="block";
		l2.style.display="none";
		l3.style.display="none";
		}
		function spanish(){
		var l1=document.getElementById("english");
		var l2=document.getElementById("spanish");
		var l3=document.getElementById("italian");
		l1.style.display="none";
		l2.style.display="block";
		l3.style.display="none";
		}
		function italian(){
		var l1=document.getElementById("english");
		var l2=document.getElementById("spanish");
		var l3=document.getElementById("italian");
		l2.style.display="none";
		l3.style.display="block";
		l1.style.display="none";
		}
		function play(){
			count++;
			if(count%2!=0)
			{
				for(var i=0;i<f.length;i++)
				{
					f[i].style.display="block";
					music[i].play();
					playpause[i].src="pausebutton.png";
				}
				
			}
			else
			{
				for(var i=0;i<f.length;i++)
				{
					//f[i].style.display="none";
					music[i].pause();
					playpause[i].src="playbutton.png";
				}
			}
		
		}
		
</script>
</html>
