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
      <img src="thunder.jpg" alt="There for you" style="width:100%;height:100%;opacity:0.45;"></img>
    </div>
    <div>
      <img class="image1" src="thunder_cover.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Thunder</p>
    <p class="artist">Imagine Dragons</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		[Verse 1]
		Just a young gun with a quick fuse
		I was uptight, wanna let loose
		I was dreaming of bigger things
		And wanna leave my own life behind
		Not a yes sir, not a follower
		Fit the box, fit the mold
		Have a seat in the foyer, take a number
		I was lightning before the thunder
		 
		[Refrain]
		Thunder, thunder
		Thunder, thun-, thunder
		Thun-thun-thunder, thunder, thunder
		Thunder, thun-, thunder
		Thun-thun-thunder, thunder
		 
		[Chorus]
		Thunder, feel the thunder
		Lightning and the thunder
		Thunder, feel the thunder
		Lightning and the thunder
		Thunder, thunder
		Thunder
		 
		[Verse 2]
		Kids were laughing in my classes
		While I was scheming for the masses
		Who do you think you are?
		Dreaming 'bout being a big star
		You say you're basic, you say you're easy
		You're always riding in the back seat
		Now I'm smiling from the stage while
		You were clapping in the nosebleeds
		 
		[Refrain]
		Thunder, thunder
		Thunder, thun-, thunder
		Thun-thun-thunder, thunder, thunder
		Thunder, thun-, thunder
		Thun-thun-thunder, thunder
		 
		[Chorus]
		Thunder, feel the thunder
		Lightning and the thunder
		Thunder, feel the thunder
		Lightning and the thunder
		Thunder
		 
		[Bridge]
		Thunder, feel the thunder
		Lightning and the thunder, thunder
		 
		[Chorus]
		Thunder, feel the thunder
		Lightning and the thunder, thunder
		Thunder, feel the thunder
		Lightning and the thunder, thunder
		Thunder, feel the thunder
		Lightning and the thunder, thunder
		Thunder, feel the thunder (feel the)
		Lightning and the thunder, thunder
		 
		[Refrain]
		Thunder, thunder, thunder
		Thun-thun-thunder, thunder
		Thunder, thunder, thunder
		Thun-thun-thunder, thunder
		Thunder, thunder, thunder
		Thun-thun-thunder, thunder
		Thunder, thunder, thunder
		Thun-thun-thunder, thunder
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		[Verso 1]
		Sólo un arma joven con un fusible rápido
		Yo estaba tenso, quería relajarme
		Estaba soñando con cosas más grandes
		Y quería dejar mi vida atrás
		No es un sí señor, no un seguidor
		Pon la caja, ajusta el molde
		Toma asiento en el vestíbulo, toma un número
		Yo estaba relampagueando antes del trueno
		 
		[Estribillo]
		Trueno trueno
		Trueno, tru-, trueno
		Tru-tru-trueno, trueno, trueno
		Trueno, trueno
		Tru-tru-trueno, trueno
		 
		[Coro]
		Trueno, siente el trueno
		El relámpago y el trueno
		Trueno, siente el trueno
		El relámpago y el trueno
		Trueno trueno
		Trueno
		 
		[Verso 2]
		Los niños se reían en mis clases
		Mientras yo estaba planeando para las masas
		¿Quién te crees que eres?
		Soñando con ser una gran estrella
		Dices que es básico, dices que es fácil
		Siempre estás en el asiento trasero
		Ahora estoy sonriendo desde el escenario mientras
		Estabas aplaudiendo con la nariz sangrando
		 
		[Estribillo]
		Trueno trueno
		Trueno, tru-, trueno
		Tru-tru-trueno, trueno, trueno
		Trueno, trueno
		Tru-tru-trueno, trueno
		 
		[Coro]
		Trueno, siente el trueno
		El relámpago y el trueno
		Trueno, siente el trueno
		El relámpago y el trueno
		Trueno
		 
		[Puente]
		Trueno, siente el trueno
		El relámpago y el trueno, trueno
		 
		[Coro]
		Trueno, siente el trueno
		El relámpago y el trueno, trueno
		Trueno, siente el trueno
		El relámpago y el trueno, trueno
		Trueno , siente el trueno
		El relámpago y el trueno, trueno
		Trueno, siente el trueno (siente el)
		El relámpago y el trueno, trueno
		 
		[Estribillo]
		Trueno, trueno, trueno
		Tru-tru-trueno, trueno
		Trueno, trueno, trueno
		Tru-tru-trueno, trueno
		Trueno, trueno, trueno
		Tru-tru-trueno, trueno
		Trueno, trueno, trueno
		Tru-tru-trueno, trueno
			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
		[Verso 1]
		Solo un novellino irascibile
		Ero stressato, volevo l'anticonformismo
		Sognavo cose più grandi
		E volevo lasciare la mia vita da parte
		Non ero un "sissignore," non ero un seguace
		Dentro una scatola, in uno stampo
		Siediti in platea, prendi un numero
		Ero il fulmine prima del tuono
		 
		[Ritornello]
		Tuono, tuono
		Tuono, tu-, tuono
		Tu-tu-tuono, tuono, tuono
		Tuono, tu-, tuono
		Tu-tu-tuono, tuono
		 
		[Coro]
		Tuono, senti il tuono
		Il fulmine e il tuono
		Tuono, senti il tuono
		Il fulmine e il tuono
		Tuono, tuono
		Tuono
		 
		[Verso 2]
		I bambini ridevano in classe
		Mentre io progettavo per le masse
		Chi pensi di essere?
		Sognando di essere una grande star
		Dici di essere basilare, di essere normale
		Viaggi sempre nel sedile posteriore
		Ora sorrido dal palco mentre
		Voi applaudivate il sangue dal mio naso
		 
		[Ritornello]
		Tuono, tuono
		Tuono, tu-, tuono
		Tu-tu-tuono, tuono, tuono
		Tuono, tu-, tuono
		Tu-tu-tuono, tuono
		 
		[Coro]
		Tuono, senti il tuono
		Il fulmine e il tuono
		Tuono, senti il tuono
		Il fulmine e il tuono
		Tuono
		 
		[Ponte]
		Tuono, senti il tuono
		Il fulmine e il tuono, tuono
		 
		[Coro]
		Tuono, senti il tuono
		Il fulmine e il tuono, tuono
		Tuono, senti il tuono
		Il fulmine e il tuono, tuono
		Tuono, senti il tuono
		Il fulmine e il tuono, tuono
		Tuono, senti il tuono (senti il)
		Il fulmine e il tuono, tuono
		 
		[Ritornello]
		Tuono, tuono, tuono
		Tu-tu-tuono, tuono, tuono
		Tuono, tuono, tuono
		Tu-tu-tuono, tuono, tuono
		Tuono, tuono, tuono
		Tu-tu-tuono, tuono, tuono
		Tuono, tuono, tuono
		Tu-tu-tuono, tuono, tuono
			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls   id="music" src="Thunder.mp3" type="audio/mpeg">
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
