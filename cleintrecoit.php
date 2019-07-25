 <?php 

$date =  htmlspecialchars ($_GET['date']);
$nom =  htmlspecialchars ($_GET['nom']);
$prenom =  htmlspecialchars ($_GET['prenom']);
$tel =  htmlspecialchars ($_GET['tel']);
$code =  htmlspecialchars ($_GET['code']);
$mart =  htmlspecialchars ($_GET['mart']);
$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result=$conxn->query("select matriclecleint  from client where matriclecleint='$mart'");
if($result->num_rows){
	
	$result1=$conxn->query("update argent set recevoir_client='$mart' where idargent='$code'");
	
	
	
	
	}else{
		
		
		$result2=$conxn->query("insert into client values('$mart','$nom','$prenom','$tel')");
	  $result3=$conxn->query("update argent set recevoir_client='$mart' where idargent='$code'");
		
		
		
		}
?>