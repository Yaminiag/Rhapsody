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
      opacity: 0.3;
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
	.playbutton{
		margin-left:22.5%;
		margin-top:15.5%;
		position:absolute;
		width:auto;
		height:25%;
		cursor:pointer;
	}

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
      margin-left: 30%;
      margin-top: 25%;
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

	#music
	{
	  float: left;
	  margin-left:3%;
	  height: 80%;
	  width: 95%;
	}
	#footer{
		display:none;
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
      <img src="havana.jpg" alt="havana" style="width:100%;"></img>
    </div>
    <div>
      <img class="image1" src="havana_cover.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Havana </p>
    <p class="artist">Camila Cabello Featuring Young Thug </p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		Havana, ooh na-na (ay)
		Half of my heart is in Havana, ooh-na-na (ay, ay)
		He took me back to East Atlanta, na-na-na
		All of my heart is in Havana (ay)
		There's somethin' 'bout his manners (uh huh)
		Havana, ooh na-na
		 
		He didn't walk up with that "how you doin'?"
		(When he came in the room)
		He said there's a lot of girls I can do with
		(But I can't without you)
		I'm doin' forever in a minute
		(That summer night in June)
		And papa says he got malo in him
		He got me feelin' like
		 
		Ooh... I knew it when I met him
		I loved him when I left him
		Got me feelin' like
		Ooh... and then I had to tell him
		I had to go, oh na-na-na-na-na
		 
		Havana, ooh na-na (ay)
		Half of my heart is in Havana, ooh-na-na (ay, ay)
		He took me back to East Atlanta, na-na-na (uh huh)
		All of my heart is in Havana (ay)
		My heart is in Havana
		Havana, ooh na-na
		 
		[Young Thug:]
		Jeffery
		Just graduated, fresh on campus, mmm
		Fresh out East Atlanta with no manners, damn
		Fresh out East Atlanta
		Bump on her bumper like a traffic jam (jam)
		Hey, I was quick to pay that girl like Uncle Sam (here you go, ay)
		Back it on me, shawty cravin' on me
		Get to diggin' on me (on me)
		She waited on me (then what?)
		Shawty cakin' on me, got the bacon on me (wait up)
		This is history in the makin' on me (on me)
		Point blank, close range, that be
		If it cost a million, that's me (that's me)
		I was gettin' mula, man they feel me
		 
		[Camila Cabello:]
		Havana, ooh na-na (ay, ay)
		Half of my heart is in Havana, ooh-na-na (oh, ay, ay)
		He took me back to East Atlanta, na-na-na (oh no)
		All of my heart is in Havana
		My heart is in Havana
		Havana, ooh na-na
		 
		Ooh na-na, oh na-na-na
		Take me back, back, back like
		Ooh na-na, oh na-na-na
		Take me back, back, back like
		Ooh na-na, oh na-na-na
		Take me back, back, back like
		Ooh na-na, oh na-na-na
		Take me back, back, back
		Yeah, ay...
		Ooh...
		Take me back to my Havana...
		 
		Havana, ooh na-na
		Half of my heart is in Havana, ooh-na-na (oh, yeah)
		He took me back to East Atlanta, na-na-na
		All of my heart is in Havana
		My heart is in Havana (ay)
		Havana, ooh na-na
		 
		Uh huh
		Oh na-na-na...
		No, no, no, take me back
		Oh na-na-na
		Havana, ooh na-na

      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		Havana, ooh na-na (ay)
		La mitad de mi corazón está en Havana, ooh-na-na (ay, ay)
		Él me llevó de vuelta hasta East Atlanta, na-na-na
		Mi corazón entero está en Havana (ay)
		Hay algo especial en sus maneras (uh huh)
		Havana, ooh na-na
		 
		No se acercó diciendo el "¿Cómo te va?" de siempre
		(Cuando entró el cuarto)
		Dijo que había múltiples chicas con quien puedo hacerlo
		(Pero no puedo sin ti)
		Voy a hacerlo para siempre en un rato
		(Esa noche de verano en junio)
		Y papá dijo que él tenía malo adentro
		Él me tiene sintiendo como
		 
		Ooh... lo sabía cuando lo conocí
		Lo amé cuando te dejé
		Me tiene sintiendo como
		Ooh... y después tuve que decirle que
		Tuve que irme, oh na-na-na-na-na
		 
		Havana, ooh na-na (ay)
		La mitad de mi corazón está en Havana, ooh-na-na (ay, ay)
		Él me llevó de vuelta hasta East Atlanta, na-na-na
		Mi corazón entero está en Havana (ay)
		Mi corazón está en Havana (uh huh)
		Havana, ooh na-na
		 
		[Young Thug:]
		Jeffery
		Acabo de graduarme, nuevo en el campus, mmm
		Justo salí de East Atlanta sin ningunos modales, caray
		Justo salí de East Atlanta
		Le choco levemente a su parachoques como un embotellamiento
		Oye, estaba presto para pagarle a la chica como Tío Sam (aquí tienes, ay)
		Bailame, ella está deseándome
		Ponte a bailarme
		Ella me esperaba (¿qué ahora?)
		Ella tiene un culote, lanzando dinero encima de mí (esperate)
		Esto está haciendo historia
		Sin rodeos, a quemarropa, así es
		Si cuesta un millón, yo lo pago (yo lo pago)
		Estaba ganado dinero, a ellos estoy gustando
		 
		[Camila Cabello:]
		Havana, ooh na-na (ay)
		La mitad de mi corazón está en Havana, ooh-na-na (ay, ay)
		Él me llevó de vuelta hasta East Atlanta, na-na-na
		Mi corazón entero está en Havana (ay)
		Mi corazón está en Havana (uh huh)
		Havana, ooh na-na
		 
		Ooh na-na, oh na-na-na
		Llévame de vuelta, de vuelta como
		Ooh na-na, oh na-na-na
		Llévame de vuelta, de vuelta como
		Ooh na-na, oh na-na-na
		Llévame de vuelta, de vuelta como
		Ooh na-na, oh na-na-na
		Llévame de vuelta, de vuelta como
		Yeah, ay...
		Ooh...
		Llévame de vuelta hasta mi Havana
		 
		Havana, ooh na-na (ay)
		La mitad de mi corazón está en Havana, ooh-na-na (ay, ay)
		Él me llevó de vuelta hasta East Atlanta, na-na-na
		Mi corazón entero está en Havana (ay)
		Mi corazón está en Havana (uh huh)
		Havana, ooh na-na
		 
		Uh huh
		Oh na-na-na...
		No, no, no, llévame de vuelta
		Oh na-na-na
		Havana, ooh na-na


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
		 
		Illuminalo
		In fuga
		Facciamo l'amore stanotte
		Facciamo pace
		Innamorati
		Provaci
		( Piccola sono proprio qui)
		 
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
		 
		Eravamo chiusi come una giacca
		Quindi apri la tua zip
		Rotoleremo giù per le rapidi
		Per trovare un onda che vada bene
		Riesci a sentire dov' è il vento?
		Riesci a sentirlo attraverso
		tutte le finestre
		in questa stanza
		 
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
		 
		Ragazza dai amore al tuo corpo
		Solo tu puoi fermarlo
		Ragazza dai amore al tuo corpo
		Solo tu puoi fermarlo
		Ragazza dai amore al tuo corpo
		Solo tu puoi fermarlo
		Ragazza dai amore al tuo corpo
		 
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
  <audio class="music" controls id="music" src="Havana.mp3" type="audio/mpeg">
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
