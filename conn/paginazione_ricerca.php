<?php

include "connect.php";

$nomeTagArt ="#".$_GET["tag"];


$result1 = $connessione->query("SELECT COUNT(*) FROM tagPerArt WHERE nome=\"".$nomeTagArt."\"");
	$row1 = $result1->fetch_row();
	$tot_records = $row1[0];



$perpage = 5;


$page = 1;
	if(isset($_GET['page'])){$page = filter_var($_GET['page'],FILTER_SANITIZE_NUMBER_INT);}
	
	
	$tot_pagine = ceil($tot_records/$perpage);
	
	
	$pagina_corrente = $page;
	$primo = ($pagina_corrente-1)*$perpage;
	
	$sql = "SELECT utente.nome as utnome, utente.cognome, articolo.titolo, articolo.dataArticolo, articolo.corpo, articolo.immagine, articolo.idArticolo FROM articolo join utente on articolo.username=utente.username join tagPerArt on articolo.idArticolo=tagPerArt.idArticolo WHERE tagPerArt.nome = \"".$nomeTagArt."\" ORDER BY dataArticolo DESC LIMIT ".$primo.",".$perpage."  ";
	
	
	
	$result = $connessione->query($sql);
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
	   
		$out.=" <div class=\"articolo\"><a class=\"titoloLink\" href=\"conn/articoloInfo.php?idArticolo=".$row['idArticolo']."\"><h2 class=\"titolo\">".$row['titolo']."</h2></a>
			<span class=\"data\">".$row['dataArticolo']."</span>
					<span class=\"autore\">".$row['utnome']." " .$row['cognome']."</span><br>";
					
					
					
	$sql2 = "SELECT * FROM tagPerArt where idArticolo='".$row['idArticolo']."' ";
	
	$result2 = $connessione->query($sql2);
	while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
	    $var =substr($row2['nome'],1);
	    
	    $out.= "<a class=\"linktag\" href=\"conn/paginazione_ricerca.php?tag=".$var."\"><span class=\"tag\">".$row2['nome']."</span> </a>";
	    
	    
	}
	
	
					$out.="<br>
					<a class=\"fotoBox\" href=\"conn/articoloInfo.php?idArticolo=".$row['idArticolo']."\"><img src=\"img/uploads/".$row['immagine']."\"  ></a>
				         ".substr($row['corpo'],0,1000)."...<a  href=\"conn/articoloInfo.php?idArticolo=".$row['idArticolo']."\"><span style=\"color: grey;\">Clicca per proseguire</span></a>
					
					<br>
					<br>
				
				</div><br>";
		
	
		
		
		}
	

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
session_start();
$_SESSION["stringa"]=$out;
$_SESSION["cosacerca"]=$nomeTagArt;
header("Location: http://www.webdefendo.it/ricerca.php");
//return $out;
	
?>