	<!DOCTYPE html>
	<html lang="it">
	<head>
	<title>Chi Siamo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet" type="text/css">
	</head>
	<body  onload="f()" onresize="resizemenu()">
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
	</script>

		<div id="container">
			<nav class="navigation">
			<a  href="index.php">	<img src="img/logo_trasparente.svg" width="170" height="170" alt="" />
				<h3>WebDefendo</h3></a>
				<br>
					<span class="menbtn" onclick="showmenu()">&#9776;</span>
					<div class="tendina">
							<ul id="menu">
								<li><a href="index.php" onclick="closemenu()"><span>Home</span></a></li>
								<li><a href="#" onclick="closemenu()"><span>Chi Siamo</span></a></li>
								<li><a href="#" onclick="closemenu()"><span>Annunci</span></a></li>
							</ul>
					</div>
			</nav>
<div class="contenitore">
			<div id="main" class="qualcosa">
				<div class="articolo">
					<br> WebDefendo (di seguito indicata come "Associazione") con
					sede in San Cipriano Picentino, in via Madonnella 8, in provincia di
					Salerno, &egrave; costituito quale ente senza fine di lucro ai sensi
					degli articoli 14 e seguenti C.C. ed &egrave; retto dalle norme dal
					presente Statuto. L'associazione &egrave; apartitica, apolitica,
					aconfessionale con durata illimitata nel tempo e con lo scopo di
					favorire la solidariet&agrave; civile e sociale attraverso lo
					svolgimento delle attivit&agrave; statutarie. L'associazione svolge
					la sua attivit&agrave; in Italia, tuttavia potranno essere realizzati
					specifici progetti anche all'estero, nell'ambito della cooperazione
					comunitaria ed internazionale. L'associazione pu&ograve; istituire
					collaborazioni, contatti e tenere collegamenti con istituti
					scolastici, atenei, organizzazioni italiane ed estere e centri di
					ricerca e laboratori. L'associazione si propone i seguenti
					obiettivi: <br> <br> 1. Promuovere iniziative atte a
					sensibilizzare l'opinione pubblica su tematiche riguardanti la
					sicurezza informatica e i rischi del Web, attraverso eventi,
					raccolte firme, collaborazioni, convegni, seminari, meeting e
					conferenze; <br> 2. Organizzare, realizzare e gestire corsi di
					formazione e aggiornamento sulle tematiche oggetto
					dell'attivit&agrave; dell'Associazione; <br> 3. Promuovere
					iniziative di collaborazione tra ambiente scolastico, universitario,
					mondo professionale e mondo industriale; <br> 4. Promuovere e/o
					finanziare attivit&agrave; di studio e ricerca negli ambiti di
					competenza, anche con il supporto di istituzioni pubbliche o
					private; <br> 5. Promuovere e/o svolgere attivit&agrave;
					divulgativa negli ambiti di competenza. Ai fini di quanto sopra,
					l'Associazione potr&agrave;: <br> <br> &nbsp; &nbsp; &nbsp;
					&nbsp;. organizzare, supportare o patrocinare eventi, seminari,
					convegni, conferenze, corsi; <br> &nbsp; &nbsp; &nbsp; &nbsp;.
					gestire siti web e mailing-list; <br> &nbsp; &nbsp; &nbsp; &nbsp;.
					avviare iniziative di studio e ricerca; <br> &nbsp; &nbsp; &nbsp;
					&nbsp;. pubblicare libri, riviste, atti o documenti derivanti da
					studi e ricerche specifiche; <br> &nbsp; &nbsp; &nbsp; &nbsp;.
					avviare iniziative di studio e ricerca; <br> &nbsp; &nbsp; &nbsp;
					&nbsp;. partecipare alle attivit&agrave; di altre associazioni,
					societ&agrave; o enti aventi scopi analoghi o connessi ai propri; in
					generale partecipare a progetti e riunioni in Italia e altri Paesi;
					<br> &nbsp; &nbsp; &nbsp; &nbsp;. stabilire collaborazioni con enti
					pubblici o privati, aziende, altre associazioni o qualunque altro
					soggetto, pubblico o privato, anche tramite la stipula di accordi o
					convenzioni. <br> <br> L'Associazione, attraverso il suo
					organo direttivo, potr&agrave; altres&igrave; svolgere tutte le
					operazioni necessarie per realizzare gli scopi istituzionali, dare
					esecuzione al deliberato dell'Assemblea, nonch&eacute; compiere tutti
					gli atti necessari alla gestione dell'associazione, come la
					sottoscrizione di contratti di somministrazione, quelli di natura
					mobiliare e immobiliare, bancarie, assicurative e fideiussorie
					necessarie o utili alla realizzazione degli scopi sociali e con
					riferimento all'oggetto sociale, nei limiti consentiti dalla legge
					vigente.
				</div>

<hr class="spazio">
			<div class="boh" id="divMessage">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
				<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
				<form name="sentMessage" id="contactForm" method="post" action="mail.php"  novalidate>
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
			<footer>
				<img src="img/logo_trasparente.svg" width="140" height="140" alt="" />
				<h2>committed to protecting you</h2>
				<div id="social_bar">
					<a href="#"><img src="img/fb.png" alt="Facebook" width="48"
						height="48" /> </a> <a href="#"><img src="img/insta.png"
						alt="Instagram" width="48" height="48" /> </a> <a href="#"><img
						src="img/twitter.png" alt="Twitter" width="48" height="48" /> </a> <a
						href="#"><img src="img/linkedin.png" alt="Linkedin" width="48"
						height="48" /> </a> <a href="#"><img src="img/youtube.png"
						alt="Youtube" width="48" height="48" /></a>
				</div>
				<div id="legal">
					<ul>
						<li><a href="#">Informative sulla privacy</a></li>
						<li><a href="#">Cookie e pubblicit&agrave; su Internet</a></li>
					</ul>
					<span>WebDefendo</span>
				</div>
			</footer>
		</div>
	</body>
	</html>