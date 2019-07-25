<?php

$id =  htmlspecialchars ($_GET['code']);
$date =  htmlspecialchars ($_GET['date']);
$status =  htmlspecialchars ($_GET['status']);
$carte =  htmlspecialchars ($_GET['carte']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result1=$conxn->query("select idconfirm from  bagconfirm where idbag='$id'");
if($result1->num_rows){

	$result4=$conxn->query("update bagconfirm set status='$status', numero_resepteur='$carte' ,temps='$date' where idbag='$id'");

	}else{
		
$result90=$conxn->query("insert into bagconfirm  values('','$date','$id','$status','$carte')");
	}
?>
