
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>affichervoyages</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="cs80.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php  include("teteagenc.php");?>

<header>

</header><!--end head--->


  
  
  
  
  
 
   <?php 

$matricule =  htmlspecialchars ($_GET['matricule']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result=$conxn->query("select * from client where  matriclecleint='$matricule'");
if($result->num_rows){
?>
<div class="container ">
<div class="row">
<div class="col-md-6 col-md-push-3 col-pull-3">
<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="login-form  ">
  <h1>table info client</h1>
     <table class="table table-responsive">
	 
  <thead class="thead-inverse">
   <div class="row">
   <div class="col-lg-12">
    <tr >
      <th>nom</th>
      <th>prenom</th>
      <th>matricule</th>
      <th>tel</th>
   
    </tr>
    </div>
    </div>
  </thead>
  <tbody>
  <?php
   
	   while($row = $result->fetch_assoc()){
		 echo ' <form>';
		    ?>
           
            
			<tr>
         
     <td><?php echo $row['nom']; ?></td>
		 <td><?php echo $row['prenom']; ?></td>
         <td><?php echo $row['matriclecleint']; ?></td>
         <td><?php  echo $row['numtelphone'];?></td>
        
             
    </tr>
   
<?php
   
   
	   }
	  ?> 
	  
	    
  </tbody>
   
       
</table> 

<hr>
<?php   $result3=$conxn->query("select * from voyages where  clients='$matricule'");
if($result3->num_rows){
	
	
	
?>
  <h1>table voyage client</h1>
<table class="table table-responsive">
	
  <thead class="thead-inverse">
   <div class="row">
   <div class="col-lg-12">
    <tr >
      <th>numero chaise</th>
      <th>date voyage</th>
      <th>ligne</th>
      <th>numero tiquet</th>
   
    </tr>
    </div>
    </div>
  </thead>
  <tbody>
  <?php
   
	   while($row = $result3->fetch_assoc()){
		 echo ' <form>';
		    ?>
           
            
			<tr>
           
     <td><?php echo $row['numchaise']; ?></td>
		 <td><?php echo $row['datevoya']; ?></td>
         <td><?php echo $row['ligne']; ?></td>
         
         <td><?php 
		 $e=$row['idvoya'];
		 $result90=$conxn->query("select idtiq from tiquet where idvoya='$e' ");
		 while($row = $result90->fetch_assoc()){
			 echo $row['idtiq'];
			 }
		 
		  ?></td>
             
    </tr>
   
<?php
   
   
	   }
	   }else{
		   echo '
	<div class="login-form" >
	<h1>table voyage client</h1>
	<div class="panel panel-danger"><div class="panel-heading"> aucun voyagas   pour ce client </div></div>';
		   
		   }
	  ?> 
	  
	    
  </tbody>
   
       
</table> 

<hr>



<?php   $result3=$conxn->query("select * from argent where client_transfert='$matricule'");
if($result3->num_rows){

	
		 

?>
 <h1>table argent client</h1>
<table class="table table-responsive">
  <thead class="thead-inverse">
   <div class="row">
   <div class="col-lg-12">
    <tr >
      <th>matricule</th>
      <th>source</th>
      <th>destination</th>
      <th>montant</th>
      <th>date</th>
       <th> destinateur</th>
    </tr>
    </div>
    </div>
  </thead>
  <tbody>
  <?php
   
	   while($row = $result3->fetch_assoc()){
		 echo ' <form>';
		    ?>
           	

            
			<tr>
           
         <td><?php echo $row['client_transfert']; ?></td>
		 <td><?php echo $row['source']; ?></td>
         <td><?php echo $row['destination']; ?></td>
         <td><?php echo $row['montant']; ?></td>
         <td><?php echo $row['temps']; ?></td>
         <td><?php  if($row['recevoir_client']==''){
			  echo"en process";
			  }else
		  echo $row['recevoir_client'];
		   ?></td>
         
         
             
    </tr>
   
<?php
   
   
	   }
	   }else{
		   echo '
	<div class="login-form" >
	 <h1>table argent client</h1>
	<div class="panel panel-danger"><div class="panel-heading"> aucun transfer de argent pour ce client </div></div>';
		   
		   }
	  ?> 
	  
	    
  </tbody>
   
       
</table> 

<hr>


<?php   $result3654=$conxn->query("select * from bagage where clientmat='$matricule'");
if($result3654->num_rows){

	
		 

?>

 <h1>table argent client</h1>
<table class="table table-responsive">
  <thead class="thead-inverse">
   <div class="row">
   <div class="col-lg-12">
    <tr >
      <th>matricule</th>
      <th>source</th>
      <th>destination</th>
      <th>poids</th>
      <th>prix</th>
      <th>date emission</th>
       <th>date reception</th>
        <th> destinateur</th>
        
    </tr>
    </div>
    </div>
  </thead>
  <tbody>
  <?php
   
	   while($row = $result3654->fetch_assoc()){
		 echo ' <form>';
		    ?>
           	

            
			<tr>

         <td><?php echo $row['clientmat']; ?></td>
		 <td><?php echo $row['depart']; ?></td>
         <td><?php echo $row['arriver']; ?></td>
          <td><?php echo $row['poids']; ?></td>
         <td><?php echo $row['bagprix']; ?></td>
         <td><?php echo $row['temps']; ?></td>
         <td>	 
		 <?php 
		 $r=$row['idbag'];
		 $result009=$conxn->query("select  temps from bagconfirm where   idbag='$r'");
if($result009->num_rows){
	  while($row = $result009->fetch_assoc()){
		  if($row['temps']=='0000-00-00'){
			  echo"en process";
			  }else
		  echo $row['temps'];
		  }
}
		   ?></td>
          <td>	 
		 <?php 
		 $r=$row['idbag'];
		 $result008=$conxn->query("select  numero_resepteur from bagconfirm where   idbag='$r'");
if($result008->num_rows){
	  while($row = $result008->fetch_assoc()){
		  if($row['numero_resepteur']==''){
			  echo"en process";
			  }else
		  echo $row['numero_resepteur'];
		  }
}
		   ?></td>
         
             
    </tr>
   
<?php
   
   
	   }
	   }else{
		   echo '
	<div class="login-form" >
	 <h1>table bagage client</h1>
	<div class="panel panel-danger"><div class="panel-heading"> aucun transfer de bagage pour ce client </div></div>';
		   
		   }
	  ?> 
	  
	    
  </tbody>
   
       
</table> 








</div> 
   </div>
      
                                
   <?Php
}else{
	echo '
	<div class="login-form" >
	<div class="panel panel-danger"><div class="panel-heading"> ce client nais pas dans note base de donnes   </div></div>';
	echo'<a type="button" class="  btn   btn-block input-lg btn-danger"  href="infoclient.php" >return</a> </div>';
	
	
	}
?>
<?php


   ?> 
   
   

	


  
  
  
  
  
  



            

   


</div><!-- end of container-->












<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="query.js"></script>
</body>
</html>