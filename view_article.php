<!doctype html>
<html lang="it">
	       <meta http-equiv="Content-Type" content=\"text/html; charset=UTF-8\" ></meta>
<head>
<meta charset="utf-8">
<title>WebDefendo-AddArticle</title>
<link href="stileAdmin/admin.css" rel="stylesheet" type="text/css">
<link href="stileAdmin/view_article.css" rel="stylesheet" type="text/css">
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
			session_start();

	$out=	include "conn/paginazione.php";
	echo $out;
    
			?>
	
		

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
			
		}
		else{
			$("body").css("background-color", "white");
			$("main").css("color", "black");
		}
		if(obj2 != null){
			//$("textarea").css("font-size", obj2.size+"px");
			//$("input[type='text']").css("font-size", obj2.size+"px");
		}
		
  });
	
</script>
</body>
</html>