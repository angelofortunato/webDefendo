<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

session_start(); // ready to go!

// inclusione del file di connessione
include "connect.php";
$user=$_POST["username"];
$pasw=$_POST["password"];

$result=$connessione->query("select * from utente where username='".$user."' and password='".$pasw."'");
if($result->num_rows > 0) {
    // conteggio dei record restituiti dalla query
    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {
  
      $_SESSION["user"] = $user;
      $_SESSION["nome"]=$row['nome'];
      $_SESSION["cognome"]=$row['cognome'];
    }
    // liberazione delle risorse occupate dal risultato
    $result->close();
 header("Location: http://www.webdefendo.it/conn/viewArticleAdmin.php"); /* Redirect browser */
  exit();
}else{

header("Location: http://www.webdefendo.it/login.php"); /* Redirect browser */
  exit();

}
?>