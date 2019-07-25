
<!DOCTYPE html>
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
    <link href="cs4.css" rel="stylesheet">

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

$date =  htmlspecialchars ($_GET['date']);


$servername = "localhost";
$username = "root";
$password = "";
$transport="transport";

$i=0;


$conxn = mysqli_connect($servername, $username, $password,$transport) or die( mysql_error());
$result=$conxn->query("select * from argent where temps='$date'");
if($result->num_rows){
?>
<div class="container ">
<div class="row">
<div class="col-md-6 col-pull-4">
<div class="container">

<div class="row">
<div class="col-md-12">
<div class="col-md-6 col-md-push-3"> <h1>update table argent</h1></div>
  <div class="login-form  ">

     <table class="table table-responsive">
	 
  <thead class="thead-inverse">
 
   <div class="row">
   <div class="col-lg-12">
    <tr >
      <th>code</th>
      <th>source</th>
      <th>destination</th>
       <th>date</th>
       <th>montant</th>
       <th>from clinet</th>
       <th>nom</th>
       <th>prenom</th>
       <th>matricule</th>
       <th>tel</th>
       <th>update</th>
    </tr>
    </div>
    </div>
  </thead>
  <tbody>
  <?php
   $i=0;
	   while($row = $result->fetch_assoc()){
		 echo ' <form>';
		    ?>
           
            
			<tr>
         
      <th > <?php echo $row['idargent'] ;?> </th>
      <td > <?php  echo  $row['source']; ?>  </td>
      <td >  <?php  echo  $row['destination']; ?> </td>
       <td >  <?php  echo $row['temps']; ?> </td>
        <td >  <?php  echo  $row['montant']; ?> </td>
         <td >  <?php  echo  $row['client_transfert']; ?> </td>
    <td>
        
         <input type="text"   class="form-control" id="<?php echo  $a=$i++;?>" value="" name="nom">
      </td>
       
       <td>  
         <input type="text"     class="form-control"id="<?php echo $b=$i++;?>"  value="" name="prenom">
     </td >
      
       <td >  
         <input type="text" class="form-control" id="<?php echo $c=$i++;?>"  value="" name="matricule">
     </td>
    
       <td >  
         <input type="text"    class="form-control" id="<?php echo $d=$i++;?>"  value="" name="tel">
      </td>
       <td >
       
       </form>
         <button type="button" onClick="sub('<?php echo $row['idargent'];?>','<?php echo $a;?>','<?php echo $b;?>','<?php echo $c;?>','<?php echo $d;?>')" class="btn "  data-toggle="modal"  data-target="#mywindow">submit</button>
       
       
       </td>
    </tr>
   
<?php
   
   
	   }
	  ?> 
	  
	    
  </tbody>
   
       
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

                                          <button  type="button"  class="btn " data-dismiss="modal">close</button>
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
	<div class="panel panel-danger"><div class="panel-heading"> pas de transfer ce jours   </div></div>';
	echo'<a type="button" class="  btn   btn-block input-lg btn-danger"  href="dateargant.php" >return</a> </div>';
	
	
	}
?>
<?php
$result=$conxn->query("select temps from argent where temps='$date'");
if($result->num_rows){

	echo'
	<div class="col-md-6 col-md-push-3"> <h1>table argent</h1></div>
<div id="load_tweets">

   </div>';
	
	}

   ?> 
  <script>

setInterval(
function ()
{
$('#load_tweets').load('loadargent.php?date=<?php echo $date; ?>').fadeIn("slow");
}, 100); // refresh every 10000 milliseconds


   function sub(code,nom,prenom,mart,tel){
	  var nom = document.getElementById(nom).value;
	  var prenom = document.getElementById(prenom).value;
	  var mart = document.getElementById(mart).value;
	   var tel = document.getElementById(tel).value;
	   var date = "<?php  echo $date;?>";
	
	  var dataString = "code="+code+"&nom="+nom+"&prenom="+prenom+"&date="+date+"&mart="+mart+"&tel="+tel ;
	    	  $.ajax({
                    type: "GET",
                    url: "cleintrecoit.php",
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