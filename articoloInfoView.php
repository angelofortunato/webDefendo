<!doctype html>
<html lang="it">
	       <meta http-equiv="Content-Type" content=\"text/html; charset=UTF-8\" ></meta>
<head>
    <?php
			include "conn/articolo.php";
			include "conn/TagArt.php";
			session_start();

			$b=$_SESSION["tagArt"];
			$a=$_SESSION["articolo"];
			$nome=$_SESSION["nome"];
			$cognome=$_SESSION["cognome"];
			$_SESSION["idarticolo"] = $a->id;
			
			if($b==null){
			    $id= $_GET["idArticolo"];
			    header("Location: http://www.webdefendo.it/conn/articoloInfo.php?idArticolo=".$id);
			    
			    
			}
			
			?>
<meta charset="utf-8">
	    <link rel="icon" href="img/logo2.png" type="image/png" />
	<title>WebDefendo | <?php echo $a->titolo; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet" type="text/css">
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
	<body  onload="f() , cookie()" onresize="resizemenu()">
	
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
					<span margi class="menbtn" onclick="showmenu()">&#9776;</span>
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
			    	
			    	<div class="articolo">
					
					
					<h2 class="titolo"><?php echo $a->titolo; ?></h2>
					<span class="data"><?php echo $a->data; ?></span>
					<span class="autore"><?php echo $nome." ".$cognome; ?></span>
					<br>
					<?php foreach($b as &$value){
					
						$var =substr($value->nomeTag,1);
					echo"
					
				
	    
	    <a class =\"linktag\" href=\"conn/paginazione_ricerca.php?tag=".$var."\">
					
					<span class=\"tag\">".$value->nomeTag."</span>
					
					</a>"
					
					
					
					
					;} ?>
					
					<div class="fotoBox" ><?php echo "<img src=\"img/uploads/".$a->img."\">"?> 
				
				        <?php echo $a->corpo ?>
					</div>
					
					<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="https://www.webdefendo.it/articoloInfoView.php?idArticolo=<?php echo $a->id; ?>" data-numposts="5"></div>
					
					
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