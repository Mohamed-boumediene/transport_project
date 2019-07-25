<?php
$ligne = htmlspecialchars ($_GET['ligne']);
$date =  htmlspecialchars ($_GET['date']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
?>
<div class="login-form">

    <table class="table table-responsive">
	 
  <thead class="thead-inverse">
    <tr>
      <th>ticket</th>
      <th>cleint matricule</th>
      <th>chaise</th>
       <th>ligne</th>
        <th>date</th>
        <th>frais</th>
         

    </tr>
  </thead>
  <tbody>
  <?php
  /**/
$result567=$conxn->query("select * from tiquet inner join voyages  on voyages.idvoya=tiquet.idvoya  && voyages.ligne='$ligne'  && voyages.datevoya='$date' ");

?>
  <?php    
    if($result567->num_rows){
	 while($row=$result567->fetch_assoc()){
		 ?>
		 <tr>
		 
		 <td><?php echo $row['idtiq']; ?></td>
		 <td><?php echo $row['matriclecleint']; ?></td>
         <td><?php echo $row['numchaise']; ?></td>
         <td><?php  echo $row['ligne'];?></td>
          <td><?php  echo $row['datevoya'];?></td>
         <td><?php echo $row['prix']."$"; ?></td>
         
		 </tr>
		 
		 
		 <?php
	 }}else{
		 
		 
		 
		 
		 }
	 ?>
	 
	 
	 	
  </tbody>

       
       
</table> 



     
   </div>