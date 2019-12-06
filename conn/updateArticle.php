<?php
// inclusione del file di connessione
session_start();
include "connect.php";
include "articolo.php";
$titolo=$_POST["titolo"];
$id=$_SESSION["idarticolo"];

$tag=$_POST["tag"];
$corpo=$_POST["corpo"];
$user=$_SESSION["user"];
$tuttiTag=array();
$Tag=array();
$tag.="#";

$j=0;
$c=0;
$k=1;
addslashes($corpo);
/*
$lunghezza=strlen($corpo);

do{
  

if(!strcmp(substr($corpo, $k,1), "'" )){
        echo("trovato apice");
       substr_replace($corpo, "'\'", $k-1, 0);
       $lunghezza=strlen($corpo);
        
    }
    $k++;

}while($k<$lunghezza);
*/

for( $i=1; $i<strlen($tag);$i++){
    
    if(!strcmp(substr($tag, $i,1), "#" )){
        
       $c=$i-$j;
       $st=substr($tag,$j,$c);
       array_push($Tag,$st); 
      
        $j=$i;
        
        
    }
        
}

$result=$connessione->query("select * from tag");
if($result->num_rows >= 0) {
    if($row = $result->fetch_array(MYSQLI_ASSOC))
    {
    $i=$result->num_rows;
    while(i>0){
        array_push($tuttiTag,$row['nome']);
        $i--;
    }
    }
}




// giorno della settimana in italiano
$numero_giorno_settimana = date("w");

// giorno del mese
$numero_giorno_mese = date("j");

// nome del mese in italiano
$numero_mese = date("n");

// numero dell'anno
$anno = date("Y");

// Stampo a video
$data =$anno . "-" . $numero_mese . "-" . $numero_giorno_mese;

if($_POST["immagine"]!=null){
$img=$_POST["immagine"];

//come template di creazione estraggo i dati da un file fisso e li
//riverso dentro un file con nome generato a caso.
/*$relativepath="img/uploads/";
$filename =$relativepath . basename($_FILES["immagine"]["name"]);*/
$file=basename($_FILES["immagine"]["name"]);

$path="../img/uploads/";
$target_file = $path . basename($_FILES["immagine"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["immagine"]["tmp_name"]);
    if($check !== false) {
        echo " File is an image - " . $target_file . ". ";
        $uploadOk = 1;
        move_uploaded_file($_FILES["immagine"]["tmp_name"], $target_file);
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// esecuzione della query per l'inserimento dei record
if (!$connessione->query("UPDATE articolo SET titolo='".$titolo."', dataArticolo='".$data."', immagine='".$file."', corpo='".$corpo."', username='".$user."' WHERE idArticolo='".$id."'")) {
  echo "Errore della query: " . $connessione->error . ".";
}else{
    $connessione->query("DELETE FROM tagPerArt WHERE idArticolo = '".$id."'");
    foreach ($Tag as &$value){
  if(array_search($value,$tuttiTag)){
     
      $connessione->query("INSERT INTO tagPerArt(idArticolo,nome) VALUES ('".$id."','".$value."')");
  }else{
     
      $connessione->query("INSERT INTO tag(nome) VALUES ('".$value."')");
      $connessione->query("INSERT INTO tagPerArt(idArticolo,nome) VALUES ('".$id."','".$value."')");
  }
}
  echo ": Modifica effettuata correttamente. torna indietro <a href=\"viewArticleAdmin.php\">qui.</a> "  ;
}
// chiusura della connessione
$connessione->close();

}else{
// esecuzione della query per l'inserimento dei record
if (!$connessione->query("UPDATE articolo SET titolo='".$titolo."', dataArticolo='".$data."', corpo='".$corpo."', username='".$user."' WHERE idArticolo='".$id."'")) {
  echo "Errore della query: " . $connessione->error . ".";
}else{
    $connessione->query("DELETE FROM tagPerArt WHERE idArticolo = '".$id."'");
    foreach ($Tag as &$value){
  if(array_search($value,$tuttiTag)){
      
      $connessione->query("INSERT INTO tagPerArt(idArticolo,nome) VALUES ('".$id."','".$value."')");
  }else{
      
      $connessione->query("INSERT INTO tag(nome) VALUES ('".$value."')");
      $connessione->query("INSERT INTO tagPerArt(idArticolo,nome) VALUES ('".$id."','".$value."')");
  }
}
  echo ": Modifica effettuata correttamente. torna indietro <a href=\"viewArticleAdmin.php\">qui.</a> ";
}
// chiusura della connessione
$connessione->close();


}

?>