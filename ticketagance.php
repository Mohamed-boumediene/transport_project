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
$ligne = htmlspecialchars ($_GET['ligne']);
$date= htmlspecialchars($_GET['date']);
$prixvoya = htmlspecialchars ($_GET['prixvoya']);
$prixbag = htmlspecialchars ($_GET['prixbag']);
$kg = htmlspecialchars ($_GET['kg']);
$chaise = htmlspecialchars ($_GET['chaise']);
$arriver = htmlspecialchars ($_GET['arriver']);
$depart = htmlspecialchars ($_GET['depart']);

$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result0 =$conxn->query("insert into client values ('$cartedandite','$nom','$prenom','$tel') ");
if(isset($_POST['prixbag'])!=0){
$result1=$conxn->query("insert into bagage  (poids,bagprix,clientmat,depart,arriver)values ('$kg','$prixbag','$cartedandite','$depart','$arriver')");
}


	$result3=$conxn->query("insert into voyages (idvoya,numchaise,datevoya,ligne,prix,clients)  values('','$chaise','$date','$ligne','$prixvoya','$cartedandite')");


$result4=$conxn->query( "select idvoya from voyages where datevoya='$date' && ligne='$ligne' ");
$id=0;

if($result4->num_rows){
	
	   while($row = $result4->fetch_assoc()){
   
	$id=$row['idvoya'];
	  }}
	 
	  
$result6=$conxn->query( "insert into tiquet  (idvoya,matriclecleint) values ('$id','$cartedandite') ");

$result7=$conxn->query( "select idtiq from tiquet where idvoya='$id' && matriclecleint='$cartedandite' ");
$idtiq=0;

if($result7->num_rows){
	
	   while($row = $result7->fetch_assoc()){
   
	$idtiq=$row['idtiq'];
	  }}

  ?>
      

   
 
  </head>
  <body>

<div class="container-fluid" >
<form id="pr" >

<div class="login-form  form-inline "  role="form">
<h1 >tegant for traveling</h1 class="ty  col-md-offset-10"><p> <h3><?php echo "ID TICKET : ".$idtiq;?></h3></p>
     
<div class="row">
  <div class=" form-group col-md-2">
   <label class=" control-label"><h4>votre nom :</h4></label> 
  </div>
   <div class="  form-group col-md-2 col-md-push-1">
   
   <label class=" control-label"><h4>votre ligne:</h4></label>
   </div>
    <div class=" form-group col-md-4  col-md-push-2">
    <label class=" control-label"><h4>point depart :</h4></label>
    </div>
     <div class=" form-group col-md-4 col-md-push-1">
     <label class=" control-label"><h4>point d'arriver :</h4></label>
     </div>
 </div><!---row1-->
 
<div class="row">

<div class="form-group col-md-3">
       <input type="text" class="form-control"  readonly value="<?php echo $nom;?>" id="nom">
       <i class="fa fa-user"></i>
 </div>


   <div class=" form-group col-md-1 col-md-offset-0">
    
   <input type="text" class="form-control"   name="ligne" readonly value="<?php echo $ligne;?>" id="ligne">
       
       <i class="fa fa-user"></i>
   
   
   </div>
    <div class=" form-group col-md-4 col-md-offset-2 ">
    
    
   <input type="text" class="form-control" readonly value="<?php echo $depart;?>" id="point depart">
       
       <i class="fa fa-user"></i>
    
    
    
    </div>
     <div class=" form-group  col-md-2 col-md-pull-1">
     
   <input type="text" class="form-control" readonly value="<?php echo $arriver;?>">
       
       <i class="fa fa-user"></i>
     
     
     </div>




 </div><!---row2-->
<!-- <br>-->
 <div class="row">
 
 <div class=" form-group col-md-2">
   <label class=" control-label"><h4>votre prenom :</h4></label> 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
   <label class=" control-label"><h4>date de voyage :</h4></label> 
  </div>
 <div class=" form-group col-md-3 col-md-push-1">
   <label class=" control-label"><h4>prix de voyage :</h4></label> 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
   <label class=" control-label"><h4> prix de bagages :</h4></label> 
  </div>
 
 
 
 
 
 
 
 
 
 
 </div><!---row3-->
 
 <div class="row">
 
 <div class="form-group log-status   col-md-2">
       <input type="text" class="form-control" readonly value="<?php echo $prenom;?>">
     
     </div>
  
  
  <div class="form-group  col-md-2 col-md-push-1" >
       
   <input type="text" class="form-control" readonly value="<?php echo $date;?>">
     </div>
 
 <div class="form-group col-md-2 col-md-push-2 ">
  
   <input type="text" class="form-control" readonly value="<?php echo$prixvoya."$" ;?>">
       
      
     </div>
 
 <div class="form-group col-md-2 col-md-push-3 ">
   
   <input type="text" class="form-control" readonly value="<?php echo   $prixbag."$";?>">
       
  
     </div>
 
 
 </div><!---row4-->
 <div class="row">
 

  
 <div class=" form-group col-md-3">
   <label class=" control-label"><h4>poids votre bagages :</h4></label> 
  </div>
  
  <div class=" form-group col-md-6">
   <label class=" control-label"><h4>chaise numero  :</h4></label> 
  </div>
  <div class=" form-group col-md-3">
   <label class=" control-label"><h4>montant total :</h4></label> 
  </div>
  
 </div><!---row5-->

     
    <div class="row"> 
      <div class="form-group  col-md-2 col-md-push-0">
   <input type="text" class="form-control" readonly value="<?php echo $kg;?>">
     </div>
    
     <div class="form-group  col-md-2 col-md-push-1">
   <input type="text" class="form-control" readonly value="<?php echo $chaise;?>">
     </div>
    
    
    

      <div class="form-group  col-md-2 col-md-push-5 ">
      <textarea class="form-control"      rows="3" cols="19" readonly >
      <?php echo $prixvoya+$prixbag."$";?>
      </textarea>
       
      </div>
 </div><!---row6-->
 
 
 

    
    
    







 </div><!---end-->
 </form>
  
  <button type="button"  class="  btn   btn-default input-md "  onclick="p('pr');">print ticket</button>
     
<script>

function p(l){
	var store = document.body.innerHTML;
	var printcontent = document.getElementById(l).innerHTML;
	document.body.innerHTML = printcontent+=" ";
	window.print() ;
	document.body.innerHTML = store ;
	}
	


</script>




 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</html>