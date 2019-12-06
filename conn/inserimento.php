<?php
// inclusione del file di connessione
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

session_start(); // ready to go!
include "connect.php";
$titolo=$_POST["titolo"];
$corpo=$_POST["corpo"];
$user=$_SESSION["user"];
$img=$_POST["immagine"];
$tag=$_POST["tag"];
$Tag=array();
$tuttiTag=array();
$j=0;
$z=0;

$c=0;
for( $i=1; $i<strlen($tag);$i++){

    if(!strcmp( substr($tag, $i,1), "#" )){
       $c=$i-$j;
       $st=substr($tag,$j,$c);
        array_push($Tag,$st); 
        $j=$i;
        
    }
     
    
    
}

    $st=substr($tag,$j,$i-1);
    array_push($Tag,$st);
   

echo $user;


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
if (!$connessione->query("INSERT INTO articolo(titolo, dataArticolo, immagine, corpo, username) VALUES ('".$titolo."','".$data."','".$file."','".$corpo."','".$user."')")) {
  echo "Errore della query: " . $connessione->error . ".";
}else{

$result=$connessione->query("select max(idArticolo) as massimo from articolo");
if($result->num_rows >= 0) {
    if($row = $result->fetch_array(MYSQLI_ASSOC))
    {
    $z=$row['massimo'];
    
    }
}
    
    foreach ($Tag as &$value){
        if(array_search($value,$tuttiTag)){
            $connessione->query("INSERT INTO tagPerArt(idArticolo,nome) VALUES ('".$z."','".$value."')");
        }else{
            $connessione->query("INSERT INTO tag(nome) VALUES ('".$value."')");
            $connessione->query("INSERT INTO tagPerArt(idArticolo,nome) VALUES ('".$z."','".$value."')");
        }
    }
  echo ": Inserimento effettuato correttamente. torna indietro <a href=\"viewArticleAdmin.php\">qui.</a> "  ;
}
// chiusura della connessione
$connessione->close();
?>