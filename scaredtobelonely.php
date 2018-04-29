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
	  background-attachment:scroll;
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
    <div class="backgroundimg" style="opacity:0.35;">
      <img src="scaredtobelonely.jpg" alt="scaredtobelonely" style="width:100%;">
    </div>
    <div>
      <img class="image1" src="scaredtobelonely_cover.png" id="img1" >
    </div>

    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
    <p class="songname"> Scared to be Lonely </p>
    <p class="artist">Martin Garrix</p>
	<img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		It was great at the very start
		Hands on each other
		Couldn't stand to be far apart

		Closer the better

		Now we're picking fights and slamming doors
		Magnifying all our flaws
		And I wonder why, wonder what for
		Why we keep coming back for more

		Is it just our bodies?
		Are we both losing our minds?
		Is the only reason you're holding me tonight
		'Cause we're scared to be lonely?

		Do we need somebody
		Just to feel like we're alright?
		Is the only reason you're holding me tonight
		'Cause we're scared to be lonely?

		Too much time losing track of us
		Where was the real?
		Undefined, spiraling out of touch
		Forgot how it feels

		All the messed-up fights and slamming doors
		Magnifying all our flaws
		And I wonder why, wonder what for
		It's like we keep coming back for more

		Is it just our bodies?
		Are we both losing our minds?
		Is the only reason you're holding me tonight
		'Cause we're scared to be lonely?

		Do we need somebody
		Just to feel like we're alright?
		Is the only reason you're holding me tonight
		'Cause we're scared to be lonely?

		Scared to be lonely

		Even when we know it's wrong
		Been somebody better for us all along
		Tell me, how can we keep holding on, holding on tonight?
		'Cause we're scared to be lonely

		Even when we know it's wrong
		Been somebody better for us all along
		Tell me, how can we keep holding on, holding on tonight?
		'Cause we're scared to be lonely

		Is it just our bodies?
		Are we both losing our minds?
		Is the only reason you're holding me tonight
		'Cause we're scared to be lonely?

		Scared to be lonely
		Scared to be lonely
		Eh, eh, scared to be lonely
      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		Fue genial al principio
		Nuestras manos juntas
		No podía estar muy lejos
		Cuanto más cerca mejor
		 
		Ahora escogemos las peleas
		Y cerramos puertas
		Ampliando todos nuestros defectos
		Y me pregunto por qué
		Me pregunto para qué
		Por qué seguimos volviendo por más
		 
		¿Son sólo nuestros cuerpos?
		¿Estamos volviéndonos locos?
		¿Es la única razón por la que me estás abrazando esta noche
		Por qué tenemos miedo a estar solos?
		¿Necesitamos a alguien
		Sólo para sentir que estamos bien?
		¿Es la única razón por la que me estás abrazando esta noche
		Por qué tenemos miedo a estar solos?
		 
		Mucho tiempo, perdiendonos la pista
		¿Dónde estaba el verdadero?
		Indefinido, en espiral fuera de tacto
		Olvido cómo se siente
		 
		Todas las malditas peleas
		Y las puertas azotadas
		Ampliando todos nuestros defectos
		Y me pregunto por qué
		Me pregunto para qué
		Por qué seguimos volviendo por más
		 
		¿Son sólo nuestros cuerpos?
		¿Estamos volviéndonos locos?
		¿Es la única razón por la que me estás abrazando esta noche
		Por qué tenemos miedo a estar solos?
		¿Necesitamos a alguien
		Sólo para sentir que estamos bien?
		¿Es la única razón por la que me estás abrazando esta noche
		Por qué tenemos miedo a estar solos?
		 
		Miedo a estar solos
		 
		Aún cuando sabemos que está mal
		Ha sido alguien mejor para nosotros todo el tiempo
		Dime, ¿cómo podemos seguir?
		Aguantando esta noche
		Por qué tenemos miedo a estar solos
		Aún cuando sabemos que está mal
		Ha sido alguien mejor para nosotros todo el tiempo
		Dime, ¿cómo podemos seguir?
		Aguantando esta noche
		Por qué tenemos miedo a estar solos
		 
		¿Son sólo nuestros cuerpos?
		¿Estamos volviéndonos locos?
		¿Es la única razón por la que me estás abrazando esta noche
		Por qué tenemos miedo a estar solos?
		 
		Miedo a estar solos
		Miedo a estar solos
		Miedo a estar solos
		Eh, eh, miedo a estar solos


			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
		All'inizio era fantastico
		Mani l'uno sull'altro
		Non sopportavamo di stare lontani
		Più eravamo vicini meglio era
		 
		Ora litighiamo
		E sbattiamo porte
		Ora enfatizziamo tutti i nostri difetti
		E mi chiedo perchè
		Mi chiedo per quale scopo
		Perchè continuiamo a tornare indietro per averne di più
		 
		Sono solo i nostri corpi?
		Stiamo impazzendo entrambi?
		E' questo l'unico motivo per cui mi stai stringendo stanotte
		E' perchè abbiamo paura di stare soli?
		Abbiamo bisogno di qualcuno
		Solo per sentirci bene?
		E' questo l'unico motivo per cui mi stai stringendo stanotte
		E' perchè abbiamo paura di stare soli?
		 
		Troppo tempo, perdiamo la cognizione di noi
		Dov'era la verità?
		Indefiniti, a spirale, fuori dal mondo
		Ho dimenticato com'era
		 
		Tutte le fottute liti
		E le porte sbattute
		Ora enfatizziamo tutti i nostri difetti
		E mi chiedo perchè
		Mi chiedo per quale scopo
		E' come se continuassimo a tornare indietro per averne di più
		 
		Sono solo i nostri corpi?
		Stiamo impazzendo entrambi?
		E' questo l'unico motivo per cui mi stai stringendo stanotte
		E' perchè abbiamo paura di stare soli?
		Abbiamo bisogno di qualcuno
		Solo per sentirci bene?
		E' questo l'unico motivo per cui mi stai stringendo stanotte
		E' perchè abbiamo paura di stare soli?
		 
		Abbiamo paura di stare soli
		 
		Anche quando sappiamo che è sbagliato
		Siamo stati qualcuno di migliore per noi tutto il tempo
		Dimmi, come facciamo a resistere?
		A resistere stanotte
		E' perchè abbiamo paura di stare soli
		Anche quando sappiamo che è sbagliato
		Siamo stati qualcuno di migliore per noi tutto il tempo
		Dimmi, come facciamo a resistere?
		A resistere stanotte
		E' perchè abbiamo paura di stare soli
		 
		Sono solo i nostri corpi?
		Stiamo impazzendo entrambi?
		E' questo l'unico motivo per cui mi stai stringendo stanotte
		E' perchè abbiamo paura di stare soli?
		 
		Abbiamo paura di stare soli
		Abbiamo paura di stare soli
		Abbiamo paura di stare soli
		Abbiamo paura di stare soli

			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls id="music" src="Scared To Be Lonely.mp3" type="audio/mpeg">
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
