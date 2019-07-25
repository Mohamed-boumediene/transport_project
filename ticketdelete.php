<?php
$idtiq = htmlspecialchars ($_GET['idtiq']);



$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";
$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result1 =$conxn->query("delete from place_vide where idtiq='$idtiq'");
?>