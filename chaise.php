
<?php


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";

$conxn1= mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result=$conxn1->query(" 
select numchaise,dates,ligne from place_vide where DATE(dates)=DATE(now())");
if($result->num_rows){
echo'
<div class="col-md-12">
<marquee> ';
 while($row = $result->fetch_assoc()){
   
	echo '<h4>chaise -->'.$row['numchaise'].'est libre sur la ligne --->'.$row['ligne'].'</h4>';
	  }

echo'
</marquee>
</div>';
}
?>