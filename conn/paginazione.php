<?php

include "connect.php";
session_start();
$user = $_SESSION["user"];

$result = $connessione->query("SELECT COUNT(*) FROM articolo where username='".$user."'");
	$row = $result->fetch_row();
	$tot_records = $row[0];
	

if($tot_records==0)
{
    $out.="non hai pubblicato ancora nulla! scrivi il tuo primo articolo.";
    
}else{

$perpage = 5;


$page = 1;
	if(isset($_GET['page'])){$page = filter_var($_GET['page'],FILTER_SANITIZE_NUMBER_INT);}
	
	
	$tot_pagine = ceil($tot_records/$perpage);
	
	
	$pagina_corrente = $page;
	$primo = ($pagina_corrente-1)*$perpage;
	
	$sql = "SELECT * FROM articolo where username='".$user."' ORDER BY dataArticolo DESC LIMIT ".$primo.",".$perpage."  ";
	
	
	
	$result = $connessione->query($sql);
	
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
	
		
		
		$out.="<br><br>";
			    $out.="<div class=\"articolo\"><div class=\"content-img\"> <img src=\"img/uploads/".$row['immagine']."\" alt=\"Copertina articolo\"></div>";
			    $out.= "<div class=\"content-text\">  <h2 class=\"title\">".$row['titolo']." </h2>";
			   	
		
		$sql2 = "SELECT * FROM tagPerArt where idArticolo='".$row['idArticolo']."' ";
	
	
	
	$result2 = $connessione->query($sql2);
	while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
	    $out.= "<span class=\"info-article\">".$row2['nome']."</span> ";
	    
	    
	}
	$out.= "<span class=\"info-article\">$_SESSION[user] ".$row['dataArticolo']."</span> ";
			   	$out.= "<br><a href=\"conn/modificaArticolo.php?idArticolo=".$row['idArticolo']."\">
			  	        <button class=\"btn-modify\">Modify</button></a></div>	</div>";
		
		}
		
		
			$out .="<style>	</style>";

$out .=	'<div class="center"><div class="pagination"><a href="?page=1"">&laquo;</a>';
for($i=1; $i<=$tot_pagine; $i++)
	{
	
	if(	$pagina_corrente==$i){
	    $out .='<a class="active" href="?page='.$i.'">'.$i.'</a>';
	    
	}else{
	    
	    
	    $out .='<a href="?page='.$i.'">'.$i.'</a>';
	}
	}
$out .= '<a href="?page='.$tot_pagine.'"">&raquo;</a></div></div>';
}


return $out;
	
?>