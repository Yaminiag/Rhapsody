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
	<style>
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
      <img src="dusktilldawn.png" alt="dusktilldawn"></img>
    </div>
    <div>
      <img class="image1" src="dusktilldawn_cover.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Dusk Till Dawn </p>
    <p class="artist">Zayn Malik</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		Not tryna be indie
		Not tryna be cool
		Just tryna be in this
		Tell me are you too?
		Can you feel where the wind is?
		Can you feel it through
		All of the windows
		Inside this room?
		 
		Cause I wanna touch you baby
		And I wanna feel you too
		I wanna see the sun rise
		on your sins just me and you
		 
		Light it up
		On the run
		Let's make love tonight
		Make it up
		Fall in love
		Try
		(Baby I'm right here)
		 
		But you'll never be alone
		I'll be with you from dusk till dawn
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll hold you when things go wrong
		I'll be with you from dusk till dawn
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll be with you from dusk till dawn
		Baby I'm right here
		 
		We were shut like a jacket
		So do your zip
		We would roll down the rapids
		To find a wave that fits
		Can you feel where the wind is?
		Can you feel it through?
		All of the windows
		inside this room
		Cause I wanna touch you baby
		I wanna feel you too
		I wanna see the sun rise
		On your sins just me and you
		 
		Light it up
		On the run
		Let's make love tonight
		Make it up
		Fall in love
		Try
		(Baby I'm right here)
		 
		But you'll never be alone
		I'll be with you from dusk till dawn
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll hold you when things go wrong
		I'll be with you from dusk till dawn
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll be with you from dusk till dawn
		Baby I'm right here
		 
		Girl give love to your body
		It's only you that can stop it
		Girl give love to your body
		It's only you that can stop it
		Girl give love to your body
		It's only you that can stop it
		Girl give love to your body
		 
		But you'll never be alone
		I'll be with you from dusk till dawn
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll hold you when things go wrong
		I'll be with you from dusk till dawn
		I'll be with you from dusk till dawn
		Baby I'm right here
		I'll be with from dusk till dawn
		Baby I'm right here
		I'll be with you from dusk till dawn
		Baby I'm right here﻿
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		No estoy intentando ser indie 
		No estoy intentando ser cool 
		Solo intento estar en esto 
		Dime, ¿estás tú también? 
		¿Puedes sentir dónde está el viento? 
		¿Puedes sentirlo a través 
		De las ventanas 
		Dentro de esta habitación? 
		 
		[ZAYN & Sia] 
		Porque quiero tocarte, cariño 
		Y quiero sentirte también 
		Quiero ver el amanecer 
		En tus pecados, solo tú y yo 
		Préndelo, en la huída 
		Hagamos el amor esta noche 
		Hagámoslo, enamorémonos, probemos 
		 
		 
		 
		Pero nunca estaremos solos 
		Estaré contigo desde el atardecer hasta el amanecer 
		Estaré contigo desde el atardecer hasta el amanecer 
		Bebé, estoy justo aquí 
		Te sostendré cuando las cosas anden mal 
		Estaré contigo desde el atardecer hasta el amanecer 
		Estaré contigo desde el atardecer hasta el amanecer 
		Bebé, estoy justo aquí 
		Estaré contigo desde el atardecer hasta el amanecer 
		Bebé, estoy justo aquí 
		Estaré contigo desde el atardecer hasta el amanecer 
		Bebé, estoy justo aquí 
		 
		[Verse 2: ZAYN] 
		Fuimos cerrados como una chaqueta 
		Así que sube tu cierre 
		Recorrerémos los rápidos 
		Para hallar una ola que encaje 
		¿Puedes sentir dónde está el viento? 
		¿Puedes sentirlo a través 
		De las ventanas 
		Dentro de esta habitación? 
		Porque quiero tocarte, bebé 
		Y quiero sentirte también 
		Quiero ver el amanecer 
		En tus pecados, solo tú y yo 
		Préndelo, en la huída 
		Hagamos el amor esta noche 
		Hagámoslo, enamorémonos, probemos 

			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
		Non sto provando ad essere indipendente
		Non sto provando ad essere figo
		Sto solo provando ad esserci
		Dimmi, lo stai facendo anche tu?
		Riesci a sentire dov' è il vento?
		Riesci a sentirlo attraverso
		tutte le finestre
		in questa stanza?
		 
		Perchè voglio toccarti piccola
		E anche io voglio sentirti
		Voglio vedere il sole sorgere
		sui tuoi peccati, solo io e te
		 
		[Pre-ritornello: Zayn, Sia]
		Illuminalo
		In fuga
		Facciamo l'amore stanotte
		Facciamo pace
		Innamorati
		Provaci
		( Piccola sono proprio qui)
		 
		[Ritornello: Zayn, Sia]
		Ma tu non sarai mai sola
		Sarò con te dal tramonto all'alba
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Ti stringerò quando le cose andranno male
		Sarò con te dal tramonto all'alba
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		 
		[Verso 2]
		Eravamo chiusi come una giacca
		Quindi apri la tua zip
		Rotoleremo giù per le rapidi
		Per trovare un onda che vada bene
		Riesci a sentire dov' è il vento?
		Riesci a sentirlo attraverso
		tutte le finestre
		in questa stanza
		 
		[Pre-ritornello: Zayn, Sia]
		Perchè voglio toccarti piccola
		E anche io voglio sentirti
		Voglio vedere il sole sorgere
		sui tuoi peccati, solo io e te
		Illuminalo
		In fuga
		Facciamo l'amore stanotte
		Facciamo pace
		Innamorati
		Provaci
		( Piccola sono proprio qui)
		 
		[Ritornello: Zayn, Sia]
		Ma tu non sarai mai sola
		Sarò con te dal tramonto all'alba
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Ti stringerò quando le cose andranno male
		Sarò con te dal tramonto all'alba
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		 
		[Bridge: Zayn, Sia]
		Ragazza dai amore al tuo corpo
		Solo tu puoi fermarlo
		Ragazza dai amore al tuo corpo
		Solo tu puoi fermarlo
		Ragazza dai amore al tuo corpo
		Solo tu puoi fermarlo
		Ragazza dai amore al tuo corpo
		 
		[Ritornello: Zayn, Sia]
		Ma tu non sarai mai sola
		Sarò con te dal tramonto all'alba
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Ti stringerò quando le cose andranno male
		Sarò con te dal tramonto all'alba
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
		Sarò con te dal tramonto all'alba
		Piccola sono proprio qui
			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls id="music" src="DuskTillDawn.mp3" type="audio/mpeg">
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
