
<?php
?>


<?

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
      <th>prix</th>
      <th>source</th>
      <th>destination</th>
      <th>date emission</th>
      <th>date reception</th>
      <th>etat de l'operation </th>
     
    </tr>
  </thead>
  <tbody>
  
  <?php
  
$result=$conxn->query("select idbag,bagprix,depart,arriver,temps from bagage where temps='$date'");
?>
  <?php    
    if($result->num_rows){
	 while($row=$result->fetch_assoc()){
		 ?>
		 <tr>
		 
		 <td><?php echo $row['idbag']; ?></td>
		 <td><?php echo $row['bagprix']; ?></td>
         <td><?php echo $row['depart']; ?></td>
         <td><?php  echo $row['arriver'];?></td>
          <td><?php  echo $row['temps'];?></td>
          <td>
          <?php  
		 $ide=$row['idbag'];
		 $result4=$conxn->query("select temps from  bagconfirm where idbag='$ide'");
		 if($result4->num_rows){
		 while($row=$result4->fetch_assoc()){
			
					 echo $row['temps'];
		
			 }}else{
				 echo"jj/mm/aaaa";
				 }
  ?>
          
          </td>
         <td>
         <?php  
		
		 $result199=$conxn->query("select status from  bagconfirm where idbag='$ide'");
		 if($result199->num_rows){
			  while($row=$result199->fetch_assoc()){
			  echo $row['status'];
			  }
			 }else{ echo " en procsess";}
			
  ?>
         </td>
 


		 </tr>
		
         
         
		 
		 <?php
	 }}
	 ?>
	 
	 
	 	
  </tbody>

       
       
</table> 

     
     
     
     


</div>
     
     
  