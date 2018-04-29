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
      <img src="uptownfunk.jpg" alt="upTownFunk"></img>
    </div>
    <div>
      <img class="image1" src="uptownfunk_cover.jpg" id="img1" ></img>
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Uptown Funk </p>
    <p class="artist">Mark Ronson feat. Bruno Mars</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
        This hit, that ice cold
        Michelle Pfeiffer, that white gold
        This one for them hood girls
        Them good girls straight masterpieces
        Stylin', whilen, livin' it up in the city
        Got Chucks on with Saint Laurent
        Got kiss myself, I'm so pretty

        I'm too hot (hot damn)
        Called a police and a fireman
        I'm too hot (hot damn)
        Make a dragon wanna retire man
        I'm too hot (hot damn)
        Say my name you know who I am
        I'm too hot (hot damn)
        Am I bad 'bout that money, break it down

        Girls hit your hallelujah (whoo)
        Girls hit your hallelujah (whoo)
        Girls hit your hallelujah (whoo)
        'Cause uptown funk gon' give it to you
        'Cause uptown funk gon' give it to you
        'Cause uptown funk gon' give it to you
        Saturday night and we in the spot
        Don't believe me just watch (come on)

        Don't believe me just watch uh

        Don't believe me just watch
        Don't believe me just watch
        Don't believe me just watch
        Don't believe me just watch
        Hey, hey, hey, oh

        Stop, wait a minute
        Fill my cup, put some liquor in it
        Take a sip, sign a check
        Julio, get the stretch
        Ride to Harlem, Hollywood
        Jackson, Mississippi
        If we show up, we gon' show out
        Smoother than a fresh dry skippy

        I'm too hot (hot damn)
        Called a police and a fireman
        I'm too hot (hot damn)
        Make a dragon wanna retire man
        I'm too hot (hot damn)
        Bitch say my name you know who I am
        I'm too hot (hot damn)
        Am I bad 'bout that money
        Break it down

        Girls hit your hallelujah (whoo)
        Girls hit your hallelujah (whoo)
        Girls hit your hallelujah (whoo)
        'Cause uptown funk gon' give it to you
        'Cause uptown funk gon' give it to you
        'Cause uptown funk gon' give it to you
        Saturday night and we in the spot
        Don't believe me just watch (come on)

        Don't believe me just watch uh

        Don't believe me just watch uh
        Don't believe me just watch uh
        Don't believe me just watch
        Don't believe me just watch
        Hey, hey, hey, oh

        Before we leave
        Lemmi tell y'all a lil' something
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up uh
        I said uptown funk you up
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up

        Come on, dance, jump on it
        If you sexy then flaunt it
        If you freaky then own it
        Don't brag about it, come show me

        Come on, dance
        Jump on it
        If you sexy then flaunt it
        Well it's Saturday night and we in the spot
        Don't believe me just watch come on!

        Don't believe me just watch uh

        Don't believe me just watch uh
        Don't believe me just watch uh
        Don't believe me just watch
        Don't believe me just watch
        Hey, hey, hey, oh

        Uptown funk you up
        Uptown funk you up (say what?)
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up (say what?)
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up (say what?)
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up
        Uptown funk you up (say what?)
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
	Este éxito es el más helado
	Michelle Pfeiffer, ese oro blanco
	Este es para las chicas de capó
	Las más buenas
	Directamente es una obra maestra
	Vivimos con estilo
	n esta ciudad
	Uso zapatillas Converse con ropa de Saint Laurent
	Tengo que besarme, soy demasiado bello
	 
	Soy demasiado candente (sí, demonios)
	Llama a la policía y a los bomberos
	Soy demasiado candente (sí, demonios)
	Hombre, hago que un dragón se quiera retirar
	Di mi nombre, tú sabes quien soy
	Soy demasiado candente (sí, demonios)
	Y mi banda va a por ese dinero
	Destrúyelo
		 
	Las chicas te dicen "Aleluya"
	Las chicas te dicen "Aleluya"
	Las chicas te dicen "Aleluya"
	Porque el funk de la ciudad te lo dará
	Porque el funk de la ciudad te lo dará
	Porque el funk de la ciudad te lo dará
	Porque el funk de la ciudad te lo dará
	Sábado en la noche y estamos en este lugar
	No me creas, míralo (ven)
		 
	No me creas, míralo
	No me creas, míralo
	No me creas, míralo
	No me creas, míralo
	Ey,ey,ey, oh!
		 
	Detente
	Espera un minuto
	Llena mi copa, pon algún licor en ella
	Toma un sorbo, firma un cheque
	¡Julio! ¡Trae la limusina!
	Conduce a Harlem, Hollywood,Jackson y Misisipi
	Te mostraremos que somos
	Más suaves que un tarro de Skippy*
		 
	Soy demasiado candente (sí, demonios)
	Llama a la policía y a los bomberos
	Soy demasiado candente (sí, demonios)
	Hombre, hago que un dragón se quiera retirar
	Di mi nombre, tú sabes quien soy
	Soy demasiado candente (sí, demonios)
	Y mi banda va a por ese dinero
	Destrúyelo
		 
	Las chicas te dicen "Aleluya"
	Las chicas te dicen "Aleluya"
	Las chicas te dicen "Aleluya"
	Porque el funk de la ciudad te lo dará
	Porque el funk de la ciudad te lo dará
	Porque el funk de la ciudad te lo dará
	Porque el funk de la ciudad te lo dará
	Sábado en la noche y estamos en este lugar
	No me creas, míralo (ven)
		 
	No me creas, míralo
	No me creas, míralo
	No me creas, míralo
	No me creas, míralo
	Ey,ey,ey, oh!
		 
	Do, do, do, do, do, do, do, do, do
	Antes de que nos vayamos
	Deja que te diga algo
	El funk de la ciudad te hará bailar,el funk de la ciudad te hará bailar
	El funk de la ciudad te hará bailar,el funk de la ciudad te hará bailar
	Dije que el funk de la ciudad te hará bailar,el funk de la ciudad te hará bailar
	El funk de la ciudad te hará bailar,el funk de la ciudad te hará bailar
	Ven, baila
	Salta
	Si eres sexy, haz gala de ello
	Si eres raro, adueñate de la pista
	No alardees de ello, ven y muéstramelo
	Ven, baila
	Salta
	Si eres sexy, haz gala de ello
	Es sábado en la noche y estamos en este lugar
		 
	No me creas, míralo
	No me creas, míralo
	No me creas, míralo
	No me creas, míralo
	No me creas, míralo
	Ey,ey,ey, oh!
		 
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar (¿¡Qué!?)
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar (¿¡Qué!?)
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar (¿¡Qué!?)
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar (¿¡Qué!?)
	El funk de la ciudad te hará bailar, el funk de la ciudad te hará bailar
			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
	Questa ti colpisce
	Controllati
	Michelle Pfeiffer**,
	l’oro bianco
	Questo va alle ragazze dei ghetti,
	a quelle brave ragazze,
	veri e propri capolavori
	Che si muovono velocemente e selvaggiamente vivendo nella città
	Mi metto lo smoking di Saint Laurent,
	mi bacio da solo da quanto sono carino

	Sono troppo focoso (dannatamente focoso),
	chiama la polizia e i vigili del fuoco
	Sono troppo focoso (dannatamente focoso), fa ritirare il drago
	Sono troppo focoso (dannatamente focoso), dì il mio nome tu sai chi sono io
	Sono troppo focoso (dannatamente focoso),
	Sono pazzo per i soldi?
	Pausa

	Ragazza manda il tuo hallelujah
	Ragazza manda il tuo hallelujah
	Ragazza manda il tuo hallelujah
	Perché il funk della uptown te lo darà
	Perché il funk della uptown te lo darà
	Perché il funk della uptown te lo darà
	Sabato sera e siamo nel posto giusto
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Hey, hey, hey, oh


	Aspetta,
	fermati un minuto
	Riempi il mio bicchiere con del liquore
	Prendine un sorso, firma un assegno
	julio, prendi l’auto
	Guida verso Harlem, Hollywood, Jackson, Mississippi
	Se facciamo vedere il nostro talento, ci facciamo notare
	Liscio come uno skippy*** bello fresco

	Sono troppo focoso (dannatamente focoso),
	chiama la polizia e i vigili del fuoco
	Sono troppo focoso (dannatamente focoso),
	fa ritirare il drago
	Sono troppo focoso (dannatamente focoso),
	Accidenti dì il mio nome tu sai chi sono io
	Sono troppo focoso (dannatamente focoso),
	Sono pazzo per i soldi?
	Pausa

	Ragazza manda il tuo hallelujah
	Ragazza manda il tuo hallelujah
	Ragazza manda il tuo hallelujah
	Perché il funk della uptown te lo darà
	Perché il funk della uptown te lo darà
	Perché il funk della uptown te lo darà

	Sabato sera e siamo nel posto giusto
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Hey, hey, hey, oh

	Prima che ce ne andiamo
	Lasciami dire una piccola cosa
	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare
	Ti dico che il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare

	Avanti, balla
	Salta
	Se sei sexy, ostentalo
	Se sei pazza, fallo vedere
	Non tirartela, mostramelo
	Avanti, Balla
	Salta
	Se sei sexy, ostentalo
	Sabato sera e siamo nel posto giusto

	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Non credere a me. Basta che guardi
	Hey, hey, hey, oh

	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare
	Il funk della uptown ti farà ballare

	*Il funky è un genere musicale, “uptown” significa “quartieri alti”
	**Michelle Pfeiffer è un’attrice di Hollywood molto bella. Dire a una ragazza che è 
	Michelle Pfeiffer è come farle un complimento.
	***Lo skippy è un cocktail.
			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls   id="music" src="UptownFunk.mp3" type="audio/mpeg">
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
