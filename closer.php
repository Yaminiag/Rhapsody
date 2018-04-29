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
	/* header */

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

    .imagebackground1 {
      width: 100%;
      margin-left: 0;
      margin-top: 5%;
      height: 40%;
      position: absolute;
      z-index: 5;
      background-color: black;
      opacity: 0.5;
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
      <img src="chainsmokers.jpg" alt="chainsmokers">
    </div>
    <div>
      <img class="image1" src="closer.jpg" id="img1"></img>
    </div>
    <!-- <div>
        <audio id="audioplayer" controls autoplay>
        </audio>
    </div> -->
    <div class="imagebackground1">
    <!-- </div>
    <div class="imagebackground2"> -->
    </div>
	<div>
		<img class="playbutton" src="playbutton.png" id="playbutton" onclick="play()"></img>
	</div>
	<p class="songname"> Closer </p>
    <p class="artist">The Chainsmokers</p>
    <img id="flag1" src="english.png" width="50%" onclick="english()" alt="england"/>
	<pre id="language1" > English</pre>
	<img id="flag2" src="spain.png" width="50%" onclick="spanish()" alt="spain"/>
	<pre id="language2" > Spanish</pre>
	<img id="flag3" src="italy.png" width="50%" onclick="italian()" alt="italy"/>
	<pre id="language3" >  Italian</pre>
	
    <div class="lyrics" id="english">
      <pre>
		Hey, I was doing just fine before I met you
		I drink too much and that's an issue
		But I'm OK
		Hey, you tell your friends it was nice to meet them
		But I hope I never see them
		Again

		I know it breaks your heart
		Moved to the city in a broke-down car
		And four years, no calls
		Now you're looking pretty in a hotel bar
		And I, I, I, I, I can't stop
		No, I, I, I, I, I can't stop

		So, baby, pull me closer
		In the back seat of your Rover
		That I know you can't afford
		Bite that tattoo on your shoulder
		Pull the sheets right off the corner
		Of that mattress that you stole
		From your roommate back in Boulder
		We ain't ever getting older

		We ain't ever getting older
		We ain't ever getting older

		You look as good as the day I met you
		I forget just why I left you,
		I was insane
		Stay and play that Blink-182 song
		That we beat to death in Tucson,
		OK

		I know it breaks your heart
		Moved to the city in a broke-down car
		And four years, no call
		Now I'm looking pretty in a hotel bar
		And I, I, I, I, I can't stop
		No, I, I, I, I, I can't stop

		So, baby, pull me closer
		In the back seat of your Rover
		That I know you can't afford
		Bite that tattoo on your shoulder
		Pull the sheets right off the corner
		Of that mattress that you stole
		From your roommate back in Boulder
		We ain't ever getting older

		We ain't ever getting older
		We ain't ever getting older

		So, baby, pull me closer
		In the back seat of your Rover
		That I know you can't afford
		Bite that tattoo on your shoulder
		Pull the sheets right off the corner
		Of that mattress that you stole
		From your roommate back in Boulder
		We ain't ever getting older

		We ain't ever getting older
		No, we ain't ever getting older
		We ain't ever getting older
		No, we ain't ever getting older
		We ain't ever getting older
		We ain't ever getting older
		We ain't ever getting older
		No, we ain't ever getting older

		We ain't ever getting older
		No, we ain't ever getting older 


      </pre>
    </div>
	<div class="lyrics" id="spanish" style="display:none;">
      <pre>
		Hey, me estaba yendo bien antes de que te conocí
		Bebí demasiado y ese es un problema pero me va bien
		Hey, Cuéntales a tus amigos que era un placer conocerlos
		Pero espero que nunca los vea de nuevo
		 
		Sé que te parte el corazón
		Mudé a la ciudad en un carro descomponido y
		Cuatro años, ninguna llamada
		Ahora te estás viendo guapa en un bar de hotel y
		No puedo parar
		No, yo no puedo parar
		 
		Así que amor hazme acercarte en la silla de atrás de tu Rover
		Del cual sé que no lo puedas permitirte
		Muérdele al tatuaje en tu ombro
		Jala las sabanas de la esquina
		Del colchón que le robaste
		De tu compañero ahí en Boulder
		Jamás nos envejeceremos
		 
		Jamás nos envejeceremos
		Jamás nos envejeceremos
		 
		Tu, te ves tan bien como el día en que te conocí
		Olvidé porqué te dejé, era insana
		Quédate, y pon esa canción de Blink-182
		Que escuchamos hasta la muerte en Tuscon, okay
		 
		Sé que te parte el corazón
		Mudé a la ciudad en un carro descomponido y
		Cuatro años, ninguna llamada
		Ahora te estás viendo guapa en un bar de hotel y
		No puedo parar
		No, yo no puedo parar
		 
		Así que amor hazme acercarte en la silla de atrás de tu Rover
		Del cual sé que no lo puedas permitirte
		Muérdele al tatuaje en tu ombro
		Jala las sabanas de la esquina
		Del colchón que le robaste
		De tu compañero ahí en Boulder
		Jamás nos envejeceremos
		 
		Jamás nos envejeceremos
		Jamás nos envejeceremos
		 
		Así que amor hazme acercarte en la silla de atrás de tu Rover
		Del cual sé que no lo puedas permitirte
		Muérdele al tatuaje en tu ombro
		Jala las sabanas de la esquina
		Del colchón que le robaste
		De tu compañero ahí en Boulder
		Jamás nos envejeceremos
		Jamás nos envejeceremos(jamás nos envejeceremos)
		Jamás nos envejeceremos(jamás nos envejeceremos)
		Jamás nos envejeceremos(jamás nos envejeceremos)
		Jamás nos envejeceremos
		 
		Jamás nos envejeceremos
		No, jamás nos envejeceremos

			</pre>
    </div>
	<div class="lyrics" id="italian" style="display:none;">
      <pre>
		Hey, me la cavavo semplicemente alla grande prima di incontrarti
		Ho bevuto troppo e questo è un problema, ma sto bene
		Hey, dì ai tuoi amici che è stato bello conoscerli
		Ma spero di non rivederli mai più
		 
		[Pre-Ritornello: Andrew Taggart]
		So che ti spezza il cuore
		Ti sei trasferita in città in un'auto scassata e
		Quattro anni, nessuna telefonata
		Ora sembri bella nel bar di un hotel e
		Io non riesco a fermarmi
		No, non riesco a fermarmi
		 
		[Ritornello: Andrew Taggart]
		Quindi tesoro tirami più vicino a te sul sedile posteriore della tua Rover
		Che so che non ti puoi permettere
		Mordi quel tatuaggio sulla tua spalla
		Togli le lenzuola dall'angolo
		Del materasso che hai rubato
		Dalla tua coinquilina quando stavi a Boulder
		Non invecchieremo mai 
		 
		[Post-Ritornello: Andrew Taggart - Instrumental]
		Non invecchieremo mai
		Non invecchieremo mai 
		 
		[Verse 2: Halsey]
		Tu, Sembri bello come il giorno in cui ti ho incontrato
		Dimentico semplicemente perché ti ho lasciato, ero fuori di testa
		Rimani, e metti quella canzone dei Blink-182
		Che mettevamo a ripetizione a Tuscon, okay
		 
		[Pre-Ritornello: Halsey]
		So che ti spezza il cuore
		Mi sono trasferita in città in un'auto scassata e
		Quattro anni, nessuna telefonata
		Ora sembro bella nel bar di un hotel e
		Io non riesco a fermarmi
		No, non riesco a fermarmi
		 
		[Ritornello: Andrew Taggart & Halsey]
		Quindi tesoro tirami più vicino a te sul sedile posteriore della tua Rover
		Che so che non ti puoi permettere
		Mordi quel tatuaggio sulla tua spalla
		Togli le lenzuola dall'angolo
		Del materasso che hai rubato
		Dalla tua coinquilina quando stavi a Boulder
		Non invecchieremo mai 
		 
		[Post-Ritornello: Andrew Taggart & Halsey - Instrumental]
		Non invecchieremo mai
		Non invecchieremo mai 
		 
		[Ritornello: Andrew Taggart & Halsey]
		Quindi tesoro tirami più vicino a te sul sedile posteriore della tua Rover
		Che so che non ti puoi permettere
		Mordi quel tatuaggio sulla tua spalla
		Togli le lenzuola dall'angolo
		Del materasso che hai rubato
		Dalla tua coinquilina quando stavi a Boulder
		Non invecchieremo mai
		Non invecchieremo mai (non invecchieremo mai)
		Non invecchieremo mai (non invecchieremo mai)
		Non invecchieremo mai (non invecchieremo mai)
		Non invecchieremo mai 
		 
		Non invecchieremo mai
		No, non invecchieremo mai

			</pre>
    </div>
	<div class="footer" id="footer">
  <audio class="music" controls id="music" src="closer.mp3" type="audio/mpeg">
  </audio>
  
  
  
</div>
  </body>
  <script>
		var flag="<?php echo $flag; ?>";
		if(flag==1)
		{
			var signin=document.getElementById("signinBtn");
			signin.innerHTML="Hello "+"<?php echo $_SESSION['Username']; ?>";
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