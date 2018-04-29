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
      <img src="starboy_bg.jpg" alt="There for you" style="width:100%;height:100%;opacity:0.45;"></img>
    </div>
    <div>
      <img class="image1" src="starboy.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Starboy</p>
    <p class="artist">The Weekend</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		[Verse 1: The Weekend]
		I'm tryna put you in the worst mood, ah
		P1 cleaner than your church shoes, ah
		Milli point two just to hurt you, ah
		All red Lamb' just to tease you, ah
		None of these toys on lease too, ah
		Made your whole year in a week too, yah
		Main bitch out your league too, ah
		Side bitch out of your league too, ah
		 
		[Pre-Chorus: The Weekend]
		House so empty, need a centerpiece
		Twenty racks a table, carved from ebony
		Cut that ivory into skinny pieces
		Then she clean it with her face man I love my baby
		You talking money, need a hearing aid
		You talking bout me, I don't see a shade
		Switch up my style, I take any lane
		I switch up my cup, I kill any pain
		 
		[Chorus: The Weekend + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
		(Ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
		 
		[Verse 2: The Weekend]
		Every day a nigga try to test me, ah
		Every day a nigga try to end me, ah
		Pull off in that Roadster SV, ah
		Pockets overweight, getting hefty, ah
		Coming for the king, that's a far cry, I
		I come alive in the fall time, I
		The competition, I don't ever listen
		I'm in the blue Mulsanne bumping New Edition
		 
		[Pre-Chorus: The Weekend]
		House so empty, need a centerpiece
		Twenty racks a table, carved from ebony
		Cut that ivory to skinny pieces
		Then she clean it with her face but I love my baby
		You talking money, need a hearing aid
		You talking bout me, I don't see a shade
		Switch up my style, I take any lane
		I switch up my cup, I kill any pain
		 
		[Chorus: The Weekend + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
		(Ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
		 
		[Verse 3: The Weekend]
		Let a nigga Brad Pitt
		Legend of the fall took the year like a bandit
		By my ma a crib and a brand new wagon
		Now she hit the grocery shop looking lavish
		Star Trek groove in that Wraith of Khan
		Girls get loose when they hear this song
		100 on the dash get me close to God
		We don't pray for love, we just pray for cars
		 
		[Pre-Chorus: The Weekend]
		House so empty, need a centerpiece
		Twenty racks a table, carved from ebony
		Cut that ivory to skinny pieces
		Then she clean it with her face but I love my baby
		You talking money, need a hearing aid
		You talking bout me, I don't see a shade
		Switch out my side, I'll take any lane
		I switch out my car if I kill any pain
		 
		[Chorus: The Weekend + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
		 
		[Chorus: The Weekend + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Look what you've done
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		I'm a motherfucking Starboy
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		Verso 1:
		Intento ponerte de mal humor, ah
		Mi Maclaren P1 está más limpia que tus zapatos de iglesia, ah
		Milli (la pistola) con solo 2 para herirte ,ah
		todos mis lamborghinis son rojos solo para chingarte , ah
		ninguno de estos juguetes están en renta también , ah
		hago en una semana todo lo que tu en un año tambien, ah
		mi puta principal esta fuera de tu rango también, ah
		mi puta del al lado esta fuera de tu rango también , ah
		 
		[Pre-Coro The Weeknd]
		La casa tan vacía, necesita un centro de mesa
		veinte estantes , una mesa tallados de evano,
		cortados de ese marfil en pequeños pedazos
		después ella lo limpiara con su cara , amigo amo a mi bebe
		cuando hablas de dinero, necesito un audífono
		cuando hablas de mi, no veo ni una sombra
		cambio mi estilo , tomo cualquier carretera/ camino
		cambio mi copa , mato todo dolor
		 
		[Coro: The Weeknd + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico estella
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico esrtella
		 
		[Verso 2: The Weeknd]
		A diario un negro intenta ponerme a prueba, ah
		A diario un negro intenta terminar conmigo, ah
		Salgo en un Roadster sV (descapotable) , ah
		mis bolsillos estan a reventar , se hacen pesados, ah
		vienen por el rey , eso esta demasiado lejos
		yo , yo vengo vivo en los tiempos de la caída
		yo soy la competencia, ni siquiera escucho
		paseo en el Mulsanne azul (carro) lanzando una nueva edición
		 
		[Pre-Coro The Weeknd]
		La casa tan vacía, necesita un centro de mesa
		veinte estantes de madera, tallados de evano,
		cortados de ese marfil en pequeños pedazos
		después ella lo limpia con su cara , amigo amo a mi bebe
		cuando hablan de dinero, necesito un audífono
		cuando hablan de mi, no veo ni una sombra
		cambia mi estilo , tomo cualquier carretera
		cambio mi copa , mato todo dolor
		 
		[Coro: The Weeknd + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico estrella
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico estrella
		 
		[Verso 3: The Weeknd]
		Deja al negro ser un Brad Pitt,
		en La leyenda del otoño el se tomo el año como un bandido
		le compre a mama una cuna, una camioneta de marca, ahora ella va de compras luciendo esplendida
		disfruta el Viaje a las estrellas como en la ira de Khan (Pelicula)
		Las chicas se sueltan cuando escuchan esta canción
		100 sobre el tablero me acercan mas a Dios
		Nosotros no oramos por amor, nosotros solo oramos por carros
		 
		[Pre-Coro The Weeknd]
		La casa tan vacía, necesita un centro de mesa
		veinte estantes de madera, tallados de evano,
		corta ese marfil en pequeños pedazos
		después ella lo limpia con su cara , amigo amo a mi bebe
		estas hablando de dinero, necesito un audífono
		estas hablando de mi, no veo ni una sombra
		cambia mi estilo , tomo cualquier carretera
		cambio mi copa , mato todo dolor
		 
		[Coro: The Weeknd + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico estelar
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico estelar
		 
		[Coro: The Weeknd + (Daft Punk)]
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico estelar
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Mira lo que has hecho
		(Ha-ha-ha-ha-ha-ha-ha-ha-ha-ha)
		Soy un maldito chico estelar
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
  <audio class="music" controls   id="music" src="Starboy.mp3" type="audio/mpeg">
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
