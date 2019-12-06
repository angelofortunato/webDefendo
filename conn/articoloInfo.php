<?php
// inclusione del file di connessione

session_start();
include "connect.php";
include "articolo.php";
include "TagArt.php";

 $id= $_GET["idArticolo"];
 
$result=$connessione->query("select * from articolo join utente on articolo.username=utente.username where idArticolo='".$id."'");
if($result->num_rows >= 0) {
    // conteggio dei record restituiti dalla query
    if($row = $result->fetch_array(MYSQLI_ASSOC))
    {
      //$id=$row['idArticolo'];
      $nome=$row['nome'];
        $cognome=$row['cognome'];
      $titolo=$row['titolo'];
      $corpo=$row['corpo'];
      $data=$row['dataArticolo'];
      $img=$row['immagine'];
      
      $Art = new Articolo($id,$titolo,$corpo,$data,$img);
      
       $_SESSION["articolo"] = $Art;
        $_SESSION["nome"] = $nome;
         $_SESSION["cognome"] = $cognome;
         
         
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
         
    }
    // liberazione delle risorse occupate dal risultato
    $result->close();
    


     header("Location: http://www.webdefendo.it/articoloInfoView.php?idArticolo=".$id);
     exit();

    
}
?>