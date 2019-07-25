
<?php

$tiq = htmlspecialchars ($_GET['idtiq']);
$value =  htmlspecialchars ($_GET['value']);
$ligne =  htmlspecialchars ($_GET['ligne']);
$date =  htmlspecialchars ($_GET['date']);

/*
$tiq="800095";
$value="non";
$ligne="nouakchott-nema";
$date="2016-05-24";
*/
$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result =$conxn->query("update tiquet set tiqvalider='$value' where  idtiq=$tiq");
  $result4=$conxn->query(" SELECT distinct numchaise,datevoya,ligne,idtiq FROM voyages join tiquet
 on  voyages.idvoya=tiquet.idvoya where
(tiqvalider ='non'
&& ligne='$ligne' ) && datevoya='$date'");
  $arrayticket= array();
 
  $i=0;
    while($row = $result4->fetch_assoc()){
		$arrayticket[$i]=$row['numchaise'];
		$i++;
		$chaise=$row['numchaise'];
		$d=$row['datevoya'];
		$l=$row['ligne'];
	   $id=$row['idtiq'];
         
		   $result9 =$conxn->query("insert into  place_vide values ('$chaise','$d','$l','$id')");
	}
 for($i=0;$i<count($arrayticket);$i++){
	   $c=$arrayticket[$i];
	 
	$result10=$conxn->query("delete from voyages where numchaise='$c' && ligne='$ligne' && datevoya='$date'");
	 }
	 
?>
