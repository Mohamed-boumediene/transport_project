
<?php

$ch = htmlspecialchars ($_GET['ch']);
$ligne =  htmlspecialchars ($_GET['ligne']);
$date =  htmlspecialchars ($_GET['date']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result =$conxn->query("select idchauf from  chauffeur where nomchaf='$ch'");
$e=0;
if($result->num_rows){
		
			while($row = $result->fetch_assoc()){
				
		$e=$row['idchauf'];
			}
			}
$result =$conxn->query("update voyages set chauffeur='$e' where datevoya='$date' && ligne='$ligne'");

?>
