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
      <img src="thereforyou.png" alt="There for you" style="width:100%;height:100%;opacity:0.45;"></img>
    </div>
    <div>
      <img class="image1" src="thereforyou_cover.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> There For You </p>
    <p class="artist">Martin Garrix and Troye Sivan</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		[Verse 1: Troye Sivan]
		I woke up pissed off today
		And lately, everyone feels fake
		Somewhere, I lost a piece of me
		Smoking cigarettes on balconies

		[Pre-Chorus: Troye Sivan]
		But I can't do this alone
		Sometimes I just need a light
		If I call you on the phone
		Need you on the other side

		[Chorus: Troye Sivan]
		So when your tears roll down your pillow like a river
		I'll be there for you
		I'll be there for you
		When you're screaming, but they only hear you whisper
		I'll be loud for you
		But you gotta be there for me too

		[Breakdown: Troye Sivan]
		But you gotta be there for me too

		[Verse 2: Troye Sivan]
		Last year took a toll on me
		But I made it with you next to me
		Around the world and back again
		I hope you're waiting at the end
		 

		[Pre-Chorus: Troye Sivan]
		But I can't do this alone
		Sometimes I just need a light
		If I call you on the phone
		Need you on the other side

		[Chorus: Troye Sivan]
		So when your tears roll down your pillow like a river
		I'll be there for you
		I'll be there for you
		When you're screaming, but they only hear you whisper
		I'll be loud for you
		I'll be loud for you

		[Bridge: Troye Sivan]
		I got you, I promise
		Let me be honest
		Love is a road that goes both ways
		When your tears roll down your pillow like a river
		I'll be there for you
		But you gotta be there for me too

		[Breakdown: Troye Sivan]
		But you gotta be there for me too

		[Bridge: Troye Sivan]
		Boy, I'm holding on to something
		Won't let go of you for nothing
		I'm running, running, just to keep my hands on you
		There was a time that I was so blue
		What I got to do to show you
		I'm running, running, just to keep my hands on you
		Running, running, just to keep my hands on you
		Running, running, just to keep my hands on you
		So I'm running, running, just to keep my hands on you
		But you gotta be there for me too
		 

		[Breakdown: Troye Sivan]
		But you gotta be there for me too
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		Desperté molesto esta mañana
		Y últimamente, todos se sienten falsos
		En algún lugar, perdí una parte de mí
		Fumando cigarrillos en los balcones
		 
		Pero no puedo hacer esto solo
		A veces sólo necesito una luz
		Si te llegara a llamar por teléfono
		Te necesito del otro lado
		 
		Estribillo:
		Así que cuando tus lágrimas rueden por tu almohada como un río
		Estaré ahí para ti
		Estaré ahí para ti
		Cuando estés gritando, pero ellos sólo te oigan susurrar
		Yo gritaré por ti
		Pero tú debes estar ahí para mí también
		 
		Pero tú debes estar ahí para mí también
		 
		El año pasado fue demasiado para mí
		Pero lo logré contigo a mi lado
		Alrededor del mundo y de vuelta otra vez
		Espero que estés esperándome al final
		 
		Pero no puedo hacer esto solo
		A veces sólo necesito una luz
		Si te llegara a llamar por teléfono
		Te necesito del otro lado
		 
		Estribillo:
		Así que cuando tus lágrimas rueden por tu almohada como un río
		Estaré ahí para ti
		Estaré ahí para ti
		Cuando estés gritando, pero ellos sólo te oigan susurrar
		Yo gritaré por ti
		Pero tú debes estar ahí para mí también
		 
		Te tengo, lo prometo
		Déjame ser honesto
		La vida es un camino en doble mano
		Cuando tus lágrimas rueden por tu almohada como un río
		Estaré ahí para ti
		Pero tú debes estar ahí para mí también
		 
		Pero tú debes estar ahí para mí también
		 
		Pero me estoy sosteniendo a algo
		Despierta si no sientes nada
		Estoy corriendo, corriendo, sólo para mantener mis manos en ti
		Hubo un tiempo en que estuve sobrio
		Qué tengo que hacer para demostrarte que
		Estoy corriendo, corriendo, sólo para mantener mis manos en ti
		Corriendo, corriendo, sólo para mantener mis manos en ti
		Corriendo, corriendo, sólo para mantener mis manos en ti
		Así que corro, corro, sólo para mantener mis manos en ti
		Pero tú debes estar ahí para mí también
		 
		Pero tú debes estar ahí para mí también
			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
		[Verso 1]
		Mi sono svegliato arrabbiato oggi
		E ultimamente, tutti si sentono falsi
		Da qualche parte, ho perso un pezzo di me
		Fumando sigarette sui balconi
		 
		[Pre-Coro]
		Ma non ce la posso fare da solo
		A volte ho bisogno di una luce
		Se ti chiamo al telefono
		Mi servi dall'altra parte
		 
		[Coro]
		Quindi quando le tue lacrime rotolano sul tuo cuscino come un fiume
		Io ci sarò per te
		Io ci sarò per te
		Quando urli, ma loro ti sentono solo bisbigliare
		Sarò forte per te
		Ma tu dovrai esserci anche per me
		 
		[Breakdown]
		Ma tu dovrai esserci anche per me
		 
		[Verso 2]
		L'anno scorso mi è costato
		Ma l'ho fatto con te vicino a me
		Intorno al mondo e indietro ancora
		Spero tu stia aspettando alla fine
		 
		[Pre-Coro]
		Ma non ce la posso fare da solo
		A volte ho bisogno di una luce
		Se ti chiamo al telefono
		Mi servi dall'altra parte
		 
		[Coro]
		Quindi quando le tue lacrime rotolano sul tuo cuscino come un fiume
		Io ci sarò per te
		Io ci sarò per te
		Quando urli, ma loro ti sentono solo bisbigliare
		Sarò forte per te
		Sarò forte per te
		 
		[Intermezzo]
		Ti ho preso, lo prometto
		Fammi essere onesto
		L'amore è una strada che va in entrambi i modi
		Quando le tue lacrime rotolano sul tuo cuscino come un fiume
		Io ci sarò per te
		Ma tu dovrai esserci anche per me
		 
		[Breakdown]
		Ma tu dovrai esserci anche per me
		 
		[Intermezzo]
		Ma sto tenendo d'occhio qualcosa
		Svegliati se non senti niente
		Sto correndo, correndo, solo per tenere le mie mani su di te
		C'era un tempo in cui ero sobrio
		Cosa ho dovuto fare per mostratelo
		Sto correndo, correndo, solo per tenere le mie mani su di te
		Correndo, correndo, solo per tenere le mie mani su di te
		Correndo, correndo, solo per tenere le mie mani su di te
		Quindi sto correndo, correndo, solo per tenere le mie mani su di te
		Ma tu dovrai esserci anche per me
		 
		[Breakdown]
		Ma tu dovrai esserci anche per me
			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls   id="music" src="There For You.mp3" type="audio/mpeg">
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
