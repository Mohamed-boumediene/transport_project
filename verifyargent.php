<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
   
    
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="from.css" rel="stylesheet">
      <?php  include("external.php");?>
      <link href="fr.css" rel="stylesheet">
      
  
  </head>
  <body>

<div class="container-fluid" >

<div class="login-form  form-inline "  role="form">
<?php  
$nom =  htmlspecialchars($_GET['nom']);
$prenom = htmlspecialchars ($_GET['prenom']);
$tel = htmlspecialchars($_GET['tel']);
$cartedandite = htmlspecialchars ($_GET['cartedandite']);
$source = htmlspecialchars ($_GET['source']);
$destination=htmlspecialchars ($_GET['destination']);
$montant= htmlspecialchars ($_GET['montant']);
$carte=htmlspecialchars ($_GET['carte']);
$date=htmlspecialchars ($_GET['date']);

$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";
$operateur="operateur";
$carted = explode("/",$carte);
$somme=0;
$r=true;
$conxn = mysqli_connect($servername, $username, $password,$operateur) or die( mysql_error());
for($i=0;$i<count($carted);$i++){
	
	$result=$conxn->query("select montant from verification where  carteid = $carted[$i] && valide='oui'");
   if($result->num_rows){
	  
	   while($row = $result->fetch_assoc()){
		    
		$somme+=$row['montant'];

		} }else{ $r=false ;echo '<div class="panel panel-danger"><div class="panel-heading"> votre carte   
	 nest pas valide </div></div>';}
}
//--------------------------------------------//verification des carte 

	if(($somme!=0) &&( $somme >= $sommetotal)){
		for($i=0;$i<count($carted);$i++){
		mysqli_query($conxn,"update verification set  valide='non' where carteid=$carted[$i]");
		}
		
		$conxn1 = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result1=$conxn1->query("select matriclecleint from client where matriclecleint='$cartedandite'");
   if($result1->num_rows){
$result1=$conxn1->query("insert into argent(source,destination,temps,montant,client_transfert) values ('$source','$destination','$date','$cartedandite')");
$result7=$conxn1->query(" select idargent from argent where  client_transfert='$cartedandite' && (temps='$date'&&  montant='$montant')");
///---//

	while($row = $result7->fetch_assoc()){

echo '<div class="panel panel-success"><div class="panel-heading">felicitation
 operation reussie avec success votre code est:'.$row["idargent"].'</div></div>';
}

	   }else{
		   
$result0 =("insert into client values ('$cartedandite','$nom','$prenom','$tel') ");
if ($conxn1->multi_query($result0)) {
   
}else{
	echo "insert client: (" . $conxn1->errno . ") " . $conxn1->error;
	}
//-------------------/
$result2=("insert into argent(source,destination,temps,montant,client_transfert) values ('$source','$destination','$date','$montant','$cartedandite')");
if ($conxn1->multi_query($result2)) {
    
}else{
	echo "insert argent: (" . $conxn1->errno . ") " . $conxn1->error;
	} 
}//end else

//----///
$result9=$conxn1->query(" select idargent from argent where  client_transfert='$cartedandite' && (temps='$date'&&  montant='$montant')");
///---//

	while($row = $result9->fetch_assoc()){

echo '<div class="panel panel-success"><div class="panel-heading">felicitation
 operation reussie avec success votre code est:'.$row["idargent"].'</div></div>';
}





}else{
	 $r=false ; echo '<div class="panel panel-danger"><div class="panel-heading"> le montant de carte est inferieur a celui envoyez </div></div>';
	
	}
	
if(!$r){
	 echo'<a type="submit" class="  btn   btn-lg btn-danger input-lg" href="argent.php" >return</a>';
	}










	







?>
 

 
 </div><!---row7-->
 </div><!---end-->

  
  




 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</html>