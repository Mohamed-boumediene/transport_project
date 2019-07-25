<?php

$date =  htmlspecialchars ($_GET['date']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
?>
<div class="login-form ">

    <table class="table table-responsive">
	 
  <thead class="thead-inverse">
    <tr >
      <th>code</th>
      <th>source</th>
      <th>destination</th>
       <th>date</th>
       <th>montant</th>
       <th>from clinet</th>
        <th>to clinet</th>
        <th>frais</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
$result=$conxn->query("select * from argent where temps='$date' ");
?>
  <?php    
    if($result->num_rows){
	 while($row=$result->fetch_assoc()){
		 ?>
		 <tr>
		 
		 <td><?php echo $row['idargent']; ?></td>
		 <td><?php echo $row['source']; ?></td>
         <td><?php echo $row['destination']; ?></td>
         <td><?php  echo $row['temps'];?></td>
          <td><?php  echo $row['montant'];?></td>
         <td><?php echo $row['client_transfert']; ?></td>
         <td><?php 
		 
		 if($row['recevoir_client']==''){
			 echo "en process";
			 }else
		 echo $row['recevoir_client']; ?></td>
          <td><?php echo $row['frais']; ?></td>
         
		 </tr>
		 
		 
		 <?php
	 }}
	 ?>
	 
	 
	 	
  </tbody>

       
       
</table> 


</div>
     
   </div>