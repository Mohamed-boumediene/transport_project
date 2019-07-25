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
     
         <?php  include("teteagenc.php");?>
      <link href="cs8.css" rel="stylesheet">
      


<?php
$nom =  htmlspecialchars($_GET['nom']);
$prenom = htmlspecialchars ($_GET['prenom']);
$tel = htmlspecialchars($_GET['tel']);
$cartedandite = htmlspecialchars ($_GET['cartedandite']);
$ligne = htmlspecialchars ($_GET['list']);
$depart = htmlspecialchars( $_GET['list1']);
$arriver = htmlspecialchars ($_GET['list2']);
$date= htmlspecialchars($_GET['date']);
$prixvoya = htmlspecialchars ($_GET['prixvoya']);
$prixbag = htmlspecialchars ($_GET['prixbag']);
$kg =  htmlspecialchars ($_GET['kg']);





$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";
$operateur="operateur";



?>

 

 </head>
  <body>

<div class="container-fluid">

<form   method="get" id="MYFORM" >

<div class="login-form  form-inline"  role="form">
<h1>inscrivez-vous pour voyager à l'état</h1>
 <div class="row">
 <div class="form-group log-status col-md-12" >
 <?php	
echo'<div class="panel panel-success"><div class="panel-heading"> felicitation  vous pouvez  chosir votre chaise </div></div>';
		
  
   ?>
   <?php
  
	$conxn1 = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
	
$result=$conxn1->query( "select numchaise from voyages where  datevoya ='$date' &&  ligne='$ligne' ");
$tab=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14);
$tab1=array();
$e=0;
$c=1;
echo'<select   class="form-control" id="we"  required="required">';
if($result->num_rows){
		echo' <option value="">';  
	
		  echo "select chaise";			echo '</option>';
		
			while($row = $result->fetch_assoc()){
				
		$tab1[$e]=$row['numchaise'];
		   $e++;
			
			}
		
			for($i=0;$i<14;$i++){
				for($r=0;$r<count($tab1);$r++){
					
					if($tab[$i]==$tab1[$r])$c=0 ;
					}
			if($c==1){
				
					echo" <option value=".$tab[$i]." name='chaise' >";  
	
		  echo "chaise --> ".$tab[$i];
			echo '</option>';
				}
			
			$c=1;
			
		
		
		}
	
	
	
	
	}else{
		
		
		echo' <option value="">';  
	
		  echo "select chaise";			echo '</option>';
		
		for($i=1;$i<=14;$i++){
			echo" <option value=".$i." name='chaise' >";  
	
		  echo "chaise ".$i;
			echo '</option>';
			
			}
		

		}


echo ' </select>';
	


?>  
 
 
  
  

</div>
     </div><!--end of row1--->
   
  
     
     
<div class="row">
 
     <div class="form-group col-md-7 col-md-push-2 ">
    <?php  

       echo'<input type="button"  class="  btn   btn-block input-lg " value="submit" onclick="r();"></input>';



   ?>  
    <script type="text/javascript">
    
function r(){
	
	 var n =document.getElementById('we');
    if(n.value ==''){
        n.style.borderColor="rgba(234, 0, 0, 0.81)";
		n.focus();
          }else{
	var chaise =document.getElementById('we').value;
	var nom = "<?php  echo $nom; ?>";
	var prenom = "<?php  echo $prenom; ?>";
	var tel = "<?php  echo $tel; ?>";
	var cartedandite = "<?php  echo $cartedandite; ?>";
	var ligne = "<?php  echo $ligne; ?>";
	var date = "<?php  echo $date; ?>";
	var prixbag = "<?php  echo $prixbag; ?>";
	var prixvoya = "<?php  echo $prixvoya; ?>";
	var kg = "<?php  echo $kg; ?>";
	var arriver = "<?php  echo $arriver; ?>";
	var depart = "<?php  echo $depart; ?>";
	
	document.location.href = "http://127.0.0.1:9999/projet/ticketagance.php?nom="+nom+"&prenom="+prenom+"&tel="+tel+"&cartedandite="+cartedandite+"&ligne="+ligne+"&date="+date+"&prixbag="+prixbag+"&prixvoya="+prixvoya+"&kg="+kg+"&chaise="+chaise+"&arriver="+arriver+"&depart="+depart;
				}
	}
    
    </script>   

</div> <!--log-btn-->    
 </div> <!--end of row2--->
 
 </div><!---end div form -->
 </form>




 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</html>>


 