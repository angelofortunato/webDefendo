<?php
// inclusione del file di connessione

// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

session_start(); // ready to go!
include "connect.php";
include "articolo.php";
include "TagArt.php";

 $id= $_GET["idArticolo"];
 
$result=$connessione->query("select * from articolo where idArticolo='".$id."'");
if($result->num_rows >= 0) {
    // conteggio dei record restituiti dalla query
    if($row = $result->fetch_array(MYSQLI_ASSOC))
    {
      //$id=$row['idArticolo'];
      $titolo=$row['titolo'];
      $corpo=$row['corpo'];
      $data=$row['dataArticolo'];
      $img=$row['immagine'];
      
      $Art = new Articolo($id,$titolo,$corpo,$data,$img);
      
       $_SESSION["articolo"] = $Art;
    }
    // liberazione delle risorse occupate dal risultato
    $result->close();
}
    $result2=$connessione->query("select * from tagPerArt where idArticolo='".$id."'");
if($result2->num_rows >= 0) {
    $Tag=array();
    // conteggio dei record restituiti dalla query
    while($row = $result2->fetch_array(MYSQLI_ASSOC))
    {
      
      $nomeTag=$row['nome'];
      $idart=$row['idArticolo'];
     $b=new TagArt($idart,$nomeTag);
      array_push($Tag,$b);
      
       
    }
    $_SESSION["tagArt"] = $Tag;
    // liberazione delle risorse occupate dal risultato
    $result2->close();
     
}

header("Location: http://www.webdefendo.it/modify_article.php"); /* Redirect browser */
     exit();
?>