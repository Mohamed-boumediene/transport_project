<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
   
     <?php  ?>
     
   

      
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <?php 
 include("teteagenc.php");
$nom =  htmlspecialchars($_GET['nom']);
$prenom = htmlspecialchars ($_GET['prenom']);
$tel = htmlspecialchars($_GET['tel']);
$cartedandite = htmlspecialchars ($_GET['cartedandite']);
$source = htmlspecialchars ($_GET['source']);
$date= htmlspecialchars($_GET['date']);
$destination = htmlspecialchars ($_GET['destination']);
$kg = htmlspecialchars ($_GET['kg']);
$prixbag = htmlspecialchars ($_GET['prixbag']);

$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn1 = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result=$conxn1->query( " select matriclecleint from client  where matriclecleint='$cartedandite' ");
if($result->num_rows){
	
	  $result9=$conxn1->query( " insert into bagage (idbag,bagprix,clientmat,depart,arriver,temps,poids)  values('','$prixbag','$cartedandite','$source','$destination','$date','$kg')");
	  }else{
		  
		  $result0=$conxn1->query("insert into client values ('$cartedandite','$nom','$prenom','$tel') ");
		   $result13=$conxn1->query( " insert into bagage (idbag,bagprix,clientmat,depart,arriver,temps,poids)  values('','$prixbag','$cartedandite','$source','$destination','$date','$kg')");
		  	  
		  }
		  $code=0;
$result5=$conxn1->query("select idbag  from bagage where temps='$date' &&  clientmat='$cartedandite'");
       while($row = $result5->fetch_assoc()){
   
	$code=$row['idbag'];
	  }
  ?>
      

   
       <link href="fr.css" rel="stylesheet">
  </head>
  <body>
    
    
<div class="container">
<form  id="pr">

<div class="login-form  form-inline"  role="form">

<h1 >Réçue transfert bagage</h1 class="ty  col-md-offset-10"><p> <h3><?php echo "CODE BAGAGE : ".$code;?></h3></p>
     
     
<div class="row">
  <div class=" form-group col-lg-2">
   <label class=" control-label"><h4>votre nom :</h4></label> 
  </div>
   <div class="  form-group col-lg-2 col-lg-push-1">
    
    <label class=" control-label"><h4>votre tel :</h4></label> 
   </div>
    <div class=" form-group col-lg-4  col-lg-push-2">
    <label class=" control-label"><h4>source  :</h4></label>
  
    </div>
     <div class=" form-group col-lg-4 col-lg-push-1">
      <label class=" control-label"><h4>destination   :</h4></label>
     </div>
 </div><!---row1-->
 
<div class="row">

<div class="form-group col-lg-3">
       <input type="text" class="form-control"    readonly value="<?php  echo $nom;?>">
       
 </div>


   <div class=" form-group col-lg-1 col-lg-offset-0">
    
      <input type="text" class="form-control"  readonly  value="<?php  echo $tel;?>">
       
       <i class="fa fa-user"></i>
   
   
   </div>
    <div class=" form-group col-lg-4 col-lg-offset-2 ">
    <input type="text" class="form-control"  readonly value="<?php  echo $source;?>">
    
   
      
    
    
    
    </div>
     <div class=" form-group  col-lg-2 col-lg-pull-1">
    
    <input type="text" class="form-control"  readonly value="<?php  echo $destination;?>">
       
       
     
     
     </div>




 </div><!---row2-->
<!-- <br>-->
 <div class="row">
 
 <div class=" form-group col-md-2">
   <label class=" control-label"><h4>votre prenom :</h4></label> 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
    <label class=" control-label"><h4>date de transfer :</h4></label> 
    
  </div>
 <div class=" form-group col-md-3 col-md-push-1">
 <label class=" control-label"><h4>prix bagage:</h4></label>
 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
      <label class=" control-label"><h4>pois bagage:</h4></label>
 
  </div>
 
 
 
 
 
 
 
 
 
 
 </div><!---row3-->
 
 <div class="row">
 
 <div class="form-group log-status   col-md-2">
       <input type="text" class="form-control"   readonly value="<?php  echo $prenom;?>">
       
     </div>
  
  
  <div class="form-group  col-md-2 col-md-push-1" >
  <input type="text" class="form-control" readonly value="<?php  echo $date;?>">
      
      
     </div>
 
 <div class="form-group col-md-2 col-md-push-2 ">
      <input type="tetx" class="form-control"  readonly value="<?php  echo $prixbag.'$';?>">
  
        
     </div>
 
 <div class="form-group col-md-2 col-md-push-3 ">
   
     <input type="tetx" class="form-control"  readonly value="<?php  echo $kg;?>">
  
       
     </div>
 
 
 </div><!---row4-->


 
<div class="row">
 <div class="form-group log-status col-md-2 ">
      
      
     </div>
     <br>
     <div class="form-group col-md-7 col-md-push-2 ">



</div> <!--log-btn-->

    
    
    
    
 </div> <!---row8-->
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