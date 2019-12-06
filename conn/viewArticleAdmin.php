<?php
// inclusione del file di connessione

session_start();
include "connect.php";
include "articolo.php";
include "TagArt.php";

$a=array();
$tag=array();


$user= $_SESSION["user"];
$result=$connessione->query("select * from articolo where username='".$user."'");
if($result->num_rows > 0) {
    // conteggio dei record restituiti dalla query
    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {
      $id=$row['idArticolo'];
      $titolo=$row['titolo'];
      $corpo=$row['corpo'];
      $data=$row['dataArticolo'];
      $img=$row['immagine'];
      
       $result2=$connessione->query("select * from tagPerArt where idArticolo='".$id."'");
if($result2->num_rows >= 0) {
    $Tag=array();
    // conteggio dei record restituiti dalla query
    while($row = $result2->fetch_array(MYSQLI_ASSOC))
    {
      
      $nome=$row['nome'];
      $idart=$row['idArticolo'];
     $b=new TagArt($idart,$nome);
      array_push($Tag,$b);
      
       
    }
    $_SESSION["tagArt"] = $Tag;
      
      $Art = new Articolo($id,$titolo,$corpo,$data,$img);
      array_push($a,$Art);
       $_SESSION["articoli"] = $a;
    }
    /*
    $result2=$connessione->query("select * from tagPerArt where idArticolo='".$a->idArticolo."'");
if($result2->num_rows >= 0) {
    // conteggio dei record restituiti dalla query
    while($row = $result2->fetch_array(MYSQLI_ASSOC))
    {
      
      
      $Art = new Articolo($id,$titolo,$corpo,$data,$img);
      array_push($a,$Art);
       $_SESSION["articoli"] = $a;
    }
    */
    // liberazione delle risorse occupate dal risultato
    $result->close();



     header("Location: http://www.webdefendo.it/view_article.php"); /* Redirect browser */
  exit();
}}else{
    
     header("Location: http://www.webdefendo.it/view_article.php"); /* Redirect browser */
  exit();
}
?>