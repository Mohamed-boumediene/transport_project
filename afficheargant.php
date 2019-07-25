
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>affichervoyages</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="cs2.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<header>
<?php  include("teteagenc.php");?>
</header><!--end head--->


  
  
  
  
  
 
   <?php 

$ligne = htmlspecialchars ($_GET['ligne']);
$date =  htmlspecialchars ($_GET['date']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";




$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result=$conxn->query("select   DISTINCT idtiq ,matriclecleint from voyages,tiquet where voyages.idvoya=tiquet.idvoya && datevoya='$date' && ligne='$ligne' ");
if($result->num_rows){
?>
<div class="container ">
<div class="row">
<div class="col-md-6 col-md-push-3 col-pull-3">
<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="login-form  ">

     <table class="table table-responsive">
	 
  <thead class="thead-inverse">
    <tr>
      <th>numero carte</th>
      <th>numero ticket</th>
      <th>present</th>
       <th>envoyez</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $i=0;
	   while($row = $result->fetch_assoc()){
		 echo ' <form>';
		    ?>
			<tr>
      <th scope="row" > <?php echo $row['matriclecleint'] ;?> </th>
      <td > <?php  echo  $row['idtiq']; ?>  </td>
      <td>   
	  <div class=" form-group">
    <select  name="<?php echo $row['idtiq'];?>"   id="<?php echo $row['idtiq'];?>"  class="form-control">
       
       <option >select state:</option>
       <option value="oui">oui</option>
       <option value="non">non </option>
       </select> </div>
	  
	  
	  </td>
       <td>
       </form>
         <button type="button" onClick="sub('<?php echo $row['idtiq'];?>')" class="btn btn-success"  data-toggle="modal"  data-target="#mywindow">submit</button>
       
       
       </td>
    </tr>
   
<?php
   
   
	   }
	  ?> 
	  
	    
  </tbody>
    <tr><td colspan="3"><div class=" form-group">

    <select  name="ch"   id="ch"  class="form-control">
       <option >select chauffereur:</option>
       <option value="ali">ali</option>
       <option value="mohamed">mohamed </option>
       <option value="mbyrik">mbyrik</option>
       <option value="salm">salm </option>
       <option value="hadrami">hadrami </option>
       <option value="sma3il">sma3il </option>
       <option value="essa">essa </option>
       
       </select> </div> </td><td> 
        <button type="button" onClick="chaff('ch','<?php echo $ligne; ?>','<?php echo $date; ?>');" class="btn btn-success"data-toggle="modal"  data-target="#mywindow">submit</button>
       
       </td></tr>
       
</table> 


</div>
     
     
   </div>
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

                                          <button  type="button"  class="btn btn-success" data-dismiss="modal">close</button>
                                       </div>
                                </div>
                            </div>
                        </div>
               </div>
        </div>
</div>
                                
   <?Php
}else{
	echo '
	<div class="login-form" >
	<div class="panel panel-danger"><div class="panel-heading"> cette voyages n est pas encore programme   </div></div>';
	echo'<a type="button" class="  btn   btn-block input-lg btn-danger"  href="tablevoyages.php" >return</a> </div>';
	
	
	}
?>
	
    
  <script>

   function sub(val){
	   var value = document.getElementById(val).value;
	   
	   var date = "<?php  echo $date;?>";
	   var ligne= "<?php  echo $ligne;?>";
	  var dataString = "idtiq="+val+"&value="+value+"&ligne="+ligne+"&date="+date ;
	    	  $.ajax({
                    type: "GET",
                    url: "errur.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    
                    }
                    });
                
        return false;
}




 function chaff(ch,ligne,date){
	   var ch = document.getElementById(ch).value;
	
	  
	   
	  var dataString = "ch="+ch+"&ligne="+ligne+"&date="+date ;
	  $.ajax({
                    type: "GET",
                    url: "choffvalider.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    
                    }
                    });
                
        return false;
}
  
  </script>

  
  
  
  
  
  



            

   


</div><!-- end of container-->












<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="query.js"></script>
</body>
</html>