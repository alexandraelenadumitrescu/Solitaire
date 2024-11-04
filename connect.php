<?php  
session_start(); 
// conectare la baza de date 
$conn = mysqli_connect('localhost', 'root', '', 'solitaire');
if (!$conn) { 
die("Eroare conectare la baza de date: " . mysqli_connect_error()); 
} 
else{
    echo "Conexiune realizată cu succes la baza de date!";
}
// definire constante globale 
define ('ROOT_PATH', realpath(dirname(__FILE__))); 
define('BASE_URL', 'http://localhost/solitaire/'); 
?>