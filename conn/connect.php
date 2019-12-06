<?php
$server   = '';  
$username = '';  
$password = '';  
$database = '';  
$connessione = new mysqli($server,$username,$password,$database);

// verifica su eventuali errori di connessione
if ($connessione->connect_error){
    echo("Connessione fallita: ". $connessione->connect_error . ".");
    exit();
}
?>