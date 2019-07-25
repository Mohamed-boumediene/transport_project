
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>affichervoyages</title>
<?php  include("teteagenc.php");?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="cs10.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<header>

</header><!--end head--->


  
  
  
  
  
 
   <?php 

$ligne = htmlspecialchars ($_GET['ligne']);
$date =  htmlspecialchars ($_GET['date']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";


$idvoya=0;

$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result =$conxn->query("select * from place_vide   where dates='$date' && ligne='$ligne'");
if($result->num_rows){
?>
<div class="container ">
<h1>clients absent </h1>
  <div class="login-form  ">
     <table class="table table-responsive">
	 
  <thead class="thead-inverse">
    <tr>
      <th>id ticket</th>
      <th>numero chaise</th>
      <th>date</th>
       <th>ligne</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
	   while($row = $result->fetch_assoc()){
		
		    ?>
			<tr>
      <th scope="row" > <?php echo $row['idtiq'] ;?> </th>
      <td > <?php  echo $row['numchaise'];  ?>  </td>
      <td > <?php  echo  $date;  ?>  </td>
      <td > <?php  echo  $ligne; ?>  </td>
   
       <td>
         
               

       <button type="button" onclick="d('<?php echo $row['idtiq'] ;?>');" class="btn "  data-toggle="modal"  data-target="#mywindow" >delete</button>
       
       </td>
    </tr>
   
<?php
   
   
	   }
	  
	  ?> 
      
	  
	    
  </tbody>
   
       
</table> 



     
     
   </div>
   <?Php
}else if(!$result->num_rows){
	echo '
	<div class="login-form">
	<div class="panel panel-danger"><div class="panel-heading"> il ya pas des clinets absent dans cette voyage   </div></div>';
	echo'<a type="button" class="  btn   btn-block input-lg btn-danger"  href="clients.php">return</a> </div>';
	
	
	}
?>
		
	
    
  <script>
   function d(w){
	   
	  
	     
	  var dataString = "idtiq="+w ;
	    	  $.ajax({
                    type: "GET",
                    url: "ticketdelete.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    
                    }
                    });
                
        return false;
	   
	 
}




 
  
  </script>

  
  
  
  
  
  



            

   


</div><!-- end of container-->


 <div class="row">
                <div class="col-md-12">
                    
                        <div class="modal fade" id="mywindow">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                             
                                <div class="modal-header">
                                      <h4 class="modal-title"> </h4>
                                   </div>
                                         <div class="modal-body">
                                           <h1>done</h1>
                                         </div>
                                       <div class="modal-footer">

                                          <button  type="button"  class="btn  " data-dismiss="modal">close</button>
                                       </div>
                                </div>
                            </div>
                        </div>
               </div>
        </div>
</div>      









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="query.js"></script>
</body>
</html>