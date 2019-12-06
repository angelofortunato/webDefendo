<!doctype html>
<html lang="it">
	       <meta http-equiv="Content-Type" content=\"text/html; charset=UTF-8\" ></meta>
<head>
<meta charset="utf-8">
<title>WebDefendo-AddArticle</title>
<link href="stileAdmin/admin.css" rel="stylesheet" type="text/css">
<link href="stileAdmin/add.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="js/jquery.fullscreen-master/release/jquery.fullscreen.js"></script>
</head>

<body>
<aside>
<a href="admin.php"><button class="btn-aside" type="button"><span class="glyphicon glyphicon-plus"></span><br>Add article</button></a>
	<a href="conn/viewArticleAdmin.php"><button class="btn-aside" type="button"><span class="glyphicon glyphicon-th-list"></span><br>View articles</button></a>
	<div id="sub-menu">
		<a href="settings.php"><button class="btn-aside" type="button"> <span class="glyphicon glyphicon-cog"></span><br>Settings</button></a>
		<a href="conn/logout.php"><button class="btn-aside" type="button"><span class="glyphicon glyphicon-log-out"></span><br> Exit</button></a>
	</div>
</aside>
<main>
	<?php
			include "conn/articolo.php";
			include "conn/TagArt.php";
			session_start();

			$b=$_SESSION["tagArt"];
			$a=$_SESSION["articolo"];
			$_SESSION["idarticolo"] = $a->id;
			
			?>
	
	<form action="conn/updateArticle.php" method="POST" enctype="multipart/form-data">
		<span class="special">Copertina</span><br>
		<span class="warning">N.B.:Non vi è la necessità di inserire nuovamente l'immagine se quest'ultima rimane invariata, dimensioni 350x250</span>
		<input type="file"  name="immagine" /><br>
		<span class="special">Titolo</span><br>
		<input type="text" name="titolo" <?php echo"value=\"$a->titolo\""; ?> placeholder="Inserisci il titolo dell'articolo" autofocus required/><br>
		<span class="special">Tag</span><br>
		<span class="warning">N.B.: i tag vanno inseriti seguendo il formato qui riportato -> #tag1 #tag2 #tag3</span>
		<input type="text" name="tag" <?php foreach($b as &$value){$out.="$value->nomeTag";} echo"value=\"$out\"";?> placeholder="Inserisci il tag dell'articolo" /><br>
		<span class="special">Corpo Articolo</span><br>
			<span class="warning">N.B.: Per poter andare a capo inserire il tag &lt;br&gt; all'interno del testo e &lt;br&gt;&lt;br&gt;per lasciare un rigo di spazio<br>
		per inserire apostrofi(') e doppi apici bisogna(") farli precedere dal carattere \ esempio: \' oppure \" \  <br>
		per inserire titoli in grassetto segurie il formato &lt;h3&gt;testo&lt;/h3&gt;
		<br>
		per inserire collegamenti a pagine alle quali si fa riferimento segurie il formato &lt;a href="url pagina"&gt; nome pagina di riferimento&lt;/a&gt;</span>
		<textarea placeholder="Inserisci il corpo dell'articolo" name="corpo" required><?php echo"$a->corpo"; ?></textarea>
		<div id="container-button">
			<input type = "submit" value="Pubblica" name ="submit" class="btn-send">
		</div>
	</form>
</main>
<script>
	var myObj, myJSON, text, obj;
	var textsize,myTextJ ,text2 ,obj2;
	
	$(document).ready(function(){
		//$('body').fullscreen();
  		text = localStorage.getItem("checkJSON");
		obj = JSON.parse(text);
		text2 = localStorage.getItem("textJSON");
		obj2 = JSON.parse(text2);
		if(obj.controllo == true){
			$("body").css("background-color", "gray");
			$("main").css("color", "white");
			$("input[type='text']").css("background-color", "#a1a2a3");
			$("input[type='text']").css("color", "black");
			$("textarea").css("background-color", "#a1a2a3");
			$("textarea").css("color", "black");
		}
		else{
			$("body").css("background-color", "white");
			$("main").css("color", "black");
		}
		if(obj2 != null){
			$("textarea").css("font-size", obj2.size+"px");
			$("input[type='text']").css("font-size", obj2.size+"px");
		}
		
  });
  
  
	
</script>
</body>
</html>