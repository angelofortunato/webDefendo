<!doctype html>
<html lang="it">
	       <meta http-equiv="Content-Type" content=\"text/html; charset=UTF-8\" ></meta>
<head>
<meta charset="utf-8">



	    <link rel="icon" href="img/logo2.png" type="image/png" />
	<title>WebDefendo</title>
      
      <meta name="description" content="WebDefendo è un organizzazione NoProfit che si impone come obiettivo di informare le fasce deboli sulla sicurezza in internet.">
      
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
	<link href="../style/style.css" rel="stylesheet" type="text/css">
	<link href="style/footer.css" rel="stylesheet" type="text/css">
	<link href="style/main.css" rel="stylesheet" type="text/css">
	<link href="style/nav.css" rel="stylesheet" type="text/css">
	
	
		<script >
		function showmenu() {
			if( document.getElementById("menu").style.display == "block")
				document.getElementById("menu").style.display = "none"
			else
				document.getElementById("menu").style.display = "block"
		}
		function resizemenu() {
			var x = window.innerWidth
			if (x >= 600)
				document.getElementById("menu").style.display = "block"
			else
				document.getElementById("menu").style.display = "none"
		}
		function closemenu() {
			var x = window.innerWidth
			if (x <= 600)
				document.getElementById("menu").style.display = "none"
		}
		var myCookie,myJSONCookie,textc,cookiej;
		function closecookie() {
		myCookie = {controllo : true};
		myJSONCookie = JSON.stringify(myCookie);
		localStorage.setItem("cookieJSON", myJSONCookie);
	
		document.getElementById("infocookie").style.display="none";
				
		}
		
		  function cookie(){
    	    	textc = localStorage.getItem("cookieJSON");
    	    	cookiej = JSON.parse(textc);
    	    if(cookiej == null){
    	         document.getElementById("infocookie").style.display="block";
    	         return;
    	    }	
    	    	
    		if(cookiej.controllo == true)
    		    document.getElementById("infocookie").style.display="none";
    		else
      		    document.getElementById("infocookie").style.display="block";
        }
	</script>

	
	
	
	</head>
	<body  onload="resizemenu() , cookie()" onresize="resizemenu()">
	
	<div id="infocookie">
	    
	        
	        <br>
	        <p>Il sito webdefendo.it utilizza i cookie, compresi i cookie di terze parti, per assicurarti la migliore esperienza all'interno del nostro sito. Se prosegui nella navigazione di questo sito acconsenti all'utilizzo dei cookie. Potrai modificare le tue preferenze e avere maggiori informazioni in qualsiasi momento consultando la sezione <a href="cookie/infocookie.pdf" ><span>Cookie Policy</span></a></p>
	        <br>
	        <button id="cookieBtn" onclick="closecookie()">Accetto</button>
	        
	    
	    
	    
	</div>
	

		<div id="container">
			<nav class="navigation">
			    	<a  href="https://www.webdefendo.it">
			    <img  src="img/logo_trasparente.svg">
			    
		
			    	
				<h3>WebDefendo</h3></a>
				<br>
				<div class="menubottone" align="left">
					<span class="menbtn" onclick="showmenu()">&#9776;</span>
					</div>
					<div class="tendina">
							<ul id="menu">
							    
								<li><a href="https://www.webdefendo.it" onclick="closemenu()"><span>Home</span></a></li>
								<li><a href="chi_siamo.php" onclick="closemenu()"><span>Chi Siamo</span></a></li>
								<li><a href="#contatti" onclick="closemenu()"><span>Contattaci</span></a></li>
							   
							</ul>
					</div>
			</nav>



			<div id="main">
			    <br>
			    
			    
			    
			   
				<?php
				$out= include "conn/paginazione_index.php";
				
				echo $out;
				
				
				?>

			
			<div class="boh2">
				<h3>Membri</h3>
				<div id="slider-bar">
					<div id="slider4" >
						<div class="slide-img">
							<a href=""> <img src="img/membri2/davide.png" style="width: 100%;" alt="foto utente"/>
							<div id="centra_testo_scorr">
								<p>Davide Bottiglieri</p>
								<p>Presidente</p>
								<p>Design Manager</p>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/paolo.png" style="width: 100%;" alt="foto utente"/>
							<div id="centra_testo_scorr">
								<p>Paolo Cantarella</p>
								<p>Vice Presidente</p>
								<p>Social Manager</p>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/raff.png" style="width: 100%;" alt="foto utente"/>
							<div id="centra_testo_scorr">
								<p>Raffaele Marino</p>
								<p>Segretario</p>
								<p>Web Manager</p>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/matt.png" style="width: 100%;" alt="foto utente"/>
							<div id="centra_testo_scorr">
								<p>Matteo Pastore</p>
								<p>Consigliere</p>
								<p>Twitter Promoter</p>
								</div>
							</a>
						</div>
					
							<div class="slide-img">
							<a href=""> <img src="img/membri2/silvio.png" style="width: 100%;" alt="foto utente"/>
							<div id="centra_testo_scorr">
								<p>Silvio Corso</p>
								<p>Tesoriere</p>
								<p>Linkedin Promoter</p>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/angelo.png" style="width: 100%; " alt="foto utente"/>
							<div id="centra_testo_scorr">
								<p>Angelo Fortunato</p>
								<p>Front-end Developer</p>
								<br>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/mario.png" style="width: 100%;" alt="foto utente" />
							<div id="centra_testo_scorr">
								<p>Mario Santoro</p>
								<p>Back-end Developer</p>
								<br>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/fonz.png" style="width: 100%;" alt="foto utente" />
							<div id="centra_testo_scorr">
								<p>Alfonso Ruggiero</p>
								<p>Front-end Developer</p>
								<p>Youtube Promoter</p>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/pino.png" style="width: 100%;" alt="foto utente" />
							<div id="centra_testo_scorr">
								<p>Giuseppe Cavaliere</p>
								<p>Facebook Promoter</p>
								<br>
								</div>
							</a>
						</div>
						
						<div class="slide-img">
							<a href=""> <img src="img/membri2/enzo.png" style="width: 100%;" alt="foto utente" />
							<div id="centra_testo_scorr">
								<p>Vincenzo Sabato</p>
								<p>Instagram Promoter</p>
								<p>Social Manager</p>
								</div>
							</a>
						</div>
						<div class="slide-img">
							<a href=""> <img src="img/membri2/erminio.png" style="width: 100%;" alt="foto utente" />
							<div id="centra_testo_scorr">
								<p>Erminio Acierno</p>
								<p>Articles Writer</p>
								<br>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="boh" id="divMessage">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				<form name="sentMessage" id="contactForm" method="post" action="mail.php"  novalidate>
				<hr class="spazio">
				<br>
					<label>Nome</label> <br> <input class="form-control" id="name"
						type="text" placeholder="Name" required="required"
						data-validation-required-message="Please enter your name.">
					<br> <br> <label>Indirizzo Email</label> <br> <input
						class="form-control" id="email" type="email"
						placeholder="Email Address" required="required"
						data-validation-required-message="Please enter your email address.">
					<br> <br> <label>Numero di Telefono</label> <br> <input
						class="form-control" id="phone" type="tel"
						placeholder="Phone Number" required="required"
						data-validation-required-message="Please enter your phone number.">
					<br> <br> <label>Messaggio</label> <br>
					<textarea class="form-control" id="message" rows="5"
						placeholder="Message" required
						data-validation-required-message="Please enter a message."></textarea>
					<br> <br> <br>

					<button type="submit" class="button" id="sendMessageButton">Invia</button>
				</form>
			</div>
</div>
		  <footer id="contatti">
				<img src="img/logo_trasparente.svg" width="140" height="140" alt="" />
				<h2>everyone should be safe on the web</h2>
				<div id="social_bar">
					<a href="http://bit.ly/WebDefendo-Facebook"><img src="img/fb.png" alt="Facebook" width="40"
						height="40" /> </a> <a href="http://bit.ly/WebDefendo-Instagram"><img src="img/insta.png"
						alt="Instagram" width="40" height="40" /> </a> <a href="http://bit.ly/WebDefendo-Twitter"><img
						src="img/twitter.png" alt="Twitter" width="40" height="40" /> </a> <a
						href="http://bit.ly/WebDefendo-Linkedin"><img src="img/linkedin.png" alt="Linkedin" width="40"
						height="40" /> </a> <a href="http://bit.ly/WebDefendo-YouTube"><img src="img/youtube.png"
						alt="Youtube" width="40" height="40" /></a>
						
							<a href="http://bit.ly/WebDefendo-Telegram"><img src="img/telegram.png" alt="Telegram" width="40"
						height="40" /> </a>
				</div>
				<div id="legal">
					<ul>
						<li><a href="cookie/infocookie.pdf" onclick="closecookie()">Informative sulla privacy</a></li>
						<li><a href="cookie/infocookie.pdf" onclick="closecookie()">Cookie e pubblicit&agrave; su Internet</a></li>
					</ul>
					<span>Mail: <a href="mailto:info@webdefendo.it?subject=Info Seminario"><img src="img/Mail.png" width="11"
						height="11"> 
					info@webdefendo.it</a></span>
					<span>WebDefendo tel: <a href="tel:+39 371 376 6885"><img src="img/wa.png" width="11"
						height="11"> +39 371 376 6885</a></span>
							<span>Segreteria tel: <a href="tel:+39 371 376 6885"><img src="img/telefono.png" width="11"
						height="11"> +39 329 344 7243</a></span>
					
					<form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="hosted_button_id" value="JE5FRMMFYZVGL" />
<input type="image" style="width:230px;" src="https://www.paypalobjects.com/en_US/IT/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button"  />
<img alt="" padding="0" border="0" src="https://www.paypal.com/en_IT/i/scr/pixel.gif" width="92" height="26" />
</form>
					
				</div>
			</footer>
		</div>
		
	</body>
	</html>