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
      <link href="fr.css" rel="stylesheet">
      
   
  
      
   
<script type="text/javascript">
	
			
		
			function myFunction() {
    document.getElementById("MYFORM").submit();
}


</script>

   
 
  </head>
  <body>
 

<div class="container-fluid">
<form action="verifyfransfertargent.php"  method="get" id="MYFORM" >

<div class="login-form  form-inline"  role="form">
<h1>fin information about clients</h1>
     
<div class="row">
  <div class=" form-group col-lg-8 col-lg-push-4">
   <label class=" control-label"><h4>enter client carte d'andite :</h4></label> 
    
  </div>
   </div>
   <div class="row">
  <div class=" form-group col-lg-8 col-lg-push-4">
   
     <input type="text" class="form-control" placeholder="insert carte d'andite" id="last" name="prenom">
  </div>
   </div>
<button type="submit" class="btn  btn-sm" >submint</button>

</div> <!--log-btn-->

 </div><!---end-->
 </form>





 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>