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
      <img src="kygo.jpg" alt="Ghost Story" style="width:100%;height:100%;opacity:0.4;"></img>
    </div>
    <div>
      <img class="image1" src="stargazing_cover.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Stargazing </p>
    <p class="artist">Kygo</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		[Verse 1: Justin Jesso]
		You're saying this hopeless, that I should hope less
		Heaven can help us, well maybe "she" might
		You say it's beyond us, what is beyond us?
		Let's see and decide
		We've been meteoric, even before this
		Burns half as always, twice as bright
		So if it's beyond us, then it's beyond us
		Lets see and decide

		[Pre-Chorus: Justin Jesso]
		And I will still be here, stargazing
		I'll still look up, look up
		Look up for love
		I will still be here, stargazing
		I'll still look up, look up
		Look up for love

		[Chorus: Justin Jesso]
		Don't you, give up, for me
		Don't fall, don't give up, for love
		Don't you, give up, for me
		Don't fall, don't give up, for love
		Don't you, give up, for me
		Don't fall, don't give up, for love
		Don't you, give up, for me
		Don't fall, don't give up, for love

		[Verse 2: Justin Jesso]
		I'm trying to save us, you don't wanna save us
		You blame human nature, and say it's unkind
		Let's make up our own minds, we've got our whole lives
		Let's see and decide, decide

		[Pre-Chorus: Justin Jesso]
		And I will still be here, stargazing
		I'll still look up, look up
		Look up for love
		Stars don't disappear, they keep blazing
		Even when the night is over
		And I will still be here, stargazing
		I'll still look up, look up
		Look up for love
		Stars don't disappear, they keep blazing
		Even when the night is over
		That's how I find the light

		[Chorus: Justin Jesso]
		Don't you, give up, for me
		Don't fall, don't give up, for love
		That's how I find the light
		Don't you, give up, for me (ooh)
		Don't fall, don't give up, for love
		Don't you, give up, for me
		Don't fall, don't give up, for love
		Don't you, give up, for me
		Don't fall, don't give up, for love
		That's how I find the light
		Don't you, give up, for me
		Don't fall, don't give up, for love
		That's how I find the light
		Don't you, give up, for me (ooh)
		Don't fall, don't give up, for love
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		[Verse 1: Justin Jesso]
		Dices que esto no tiene solución, que debería esperar menos
		Que el Cielo puede ayudarnos, bueno, entonces quizá "él" lo hará
		Dices que esto va más allá de nosotros, ¿qué va más allá de nosotros?
		Veamos y decidamos

		Hemos sido meteóricos, incluso antes de esto
		Arde la mitad como siempre, dos veces más brillante
		Así que si esto va más allá de nosotros, entonces va más allá de nosotros
		Veamos y decidamos

		[Pre-Chorus: Justin Jesso]
		Y seguiré estando aquí aún, observando detenidamente las estrellas
		Seguiré viendo hacia arriba, viendo hacia arriba
		Viendo hacia arriba en busca de amor
		Y seguiré estando aquí aún, observando detenidamente las estrellas
		Seguiré viendo hacia arriba, viendo hacia arriba
		Viendo hacia arriba en busca de amor

		[Chorus: Justin Jesso]
		No renuncies por mí
		No caigas, no te renuncies, por amor
		No renuncies por mí
		No caigas, no te renuncies, por amor
		No renuncies por mí
		No caigas, no te renuncies, por amor
		No renuncies por mí
		No caigas, no te renuncies, por amor

		[Verse 2: Justin Jesso]
		Estoy tratando de salvarnos, tú no deseas salvarnos
		Le echas la culpa a la naturaleza humana, y dices que es malvada
		Pongamos en orden nuestras ideas, tenemos toda nuestras vidas
		Veamos y decidamos, decidamos

		[Pre-Chorus: Justin Jesso]
		Y seguiré estando aquí aún, observando detenidamente las estrellas 
		Seguiré viendo hacia arriba, viendo hacia arriba
		Viendo hacia arriba en busca de amor
		Las estrellas no desaparecen, ellas continúan ardiendo
		Aun cuando la noche ha terminado
		Y seguiré estando aquí aún, observando detenidamente las estrellas 
		Seguiré viendo hacia arriba, viendo hacia arriba
		Viendo hacia arriba en busca de amor
		Las estrellas no desaparecen, ellas continúan ardiendo
		Aun cuando la noche ha terminado
		Así es como hallo la luz

		[Chorus: Justin Jesso]
		No renuncies por mí
		No caigas, no renuncies por amor
		Así es como hallo la luz
		No renuncies por mí (ooh)
		No caigas, no renuncies por amor
		No renuncies por mí
		No caigas, no renuncies por amor
		No renuncies por mí
		No caigas, no renuncies por amor
		No renuncies por mí
		No caigas, no renuncies por amor
		Así es como hallo la luz
		No renuncies por mí
		No caigas, no renuncies por amor
		Así es como hallo la luz
		No renuncies por mí (ooh)
		No caigas, no renuncies por amor

			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
		Stai dicendo che è senza speranza, che dovrei sperare di meno
		Il paradiso puó aiutarci, potrebbe lei aiutarci
		Dici che è oltre noi, cosa è oltre noi?
		
		Vediamo e decidiamo
		Siamo stati meteorici, anche prima di questo
		Brucia come sempre, due volte più luminoso
		Quindi se è oltre noi, è oltre noi
		Vediamo e decidiamo
		Ed io saró ancora qui, osservando le stelle
		E guardo avanti, avanti
		Avanti per amore
		Ed io saró qui, osservando le stelle
		E guardo avanti, avanti
		Avanti per amore
		Non mollare per me
		Non cadere, non mollare, per amore
		Non mollare per me
		Non cadere, non mollare, per amore
		Non mollare per me
		Non cadere, non mollare, per amore
		Non mollare per me
		Non cadere, non mollare, per amore
		Sto cercando di salvarci, non ci vuoi salvare
		
		Dai la colpa alla natura, e dici che è scortese
		Costruiamo le nostre menti, abbiamo ottenuto le nostre vite
		Andiamo e decidiamo, decidiamo
		Ed io saró ancora qui, osservando le stelle
		E guardo avanti, avanti
		Avanti per amore
		Le stelle non spariscono, loro continuano a bruciare
		Anche quando cala la notte
		Ed io saró ancora qui, osservando le stelle
		E guardo avanti, avanti
		Avanti per amore
		Le stelle non spariscono, loro continuano a bruciare
		Anche quando cala la notte
		Questo è come ho trovato la luce
		Non mollare per me
		Non cadere, non mollare, per amore
		Questo è come ho trovato la luce
		Non tu, non mollare, per me
		Non cadere, non mollare, per amore
		Non mollare per me
		Non cadere, non mollare, per amore
		Non mollare per me
		Non cadere, non mollare, per amore
		Questo è come ho trovato la luce
		Non mollare per me
		Non cadere, non mollare, per amore
		Questo è come ho trovato la luce
		Non tu, non mollare, per me
		Non cadere, non mollare, per amore

			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls   id="music" src="Stargazing.mp3" type="audio/mpeg">
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
