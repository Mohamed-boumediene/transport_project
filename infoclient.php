

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>tablesvoyages</title>
<?php  include("teteagenc.php");?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="cs5.css" rel="stylesheet">

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

<div class="container">
   <script>
  	function FormValidation(){

       var d =document.getElementById('d');
	  

    if(d.value ==''){
        d.style.borderColor="rgba(234, 0, 0, 0.81)";
		d.focus();
                return false;

    }else if(d.value !=''){
		d.style.borderColor="#72a8c7";
		  d.focus();
		} 
	}
  
  </script>
  
  <div class="login-form">
<form action="affchierclient.php" method="get"  onsubmit="return FormValidation();" >
     <h1>obetenir info client</h1>
     <div class="form-group ">
         <input type="text" class="form-control"    id="d" value=""  placeholder="insert clinet matricule"name="matricule">
     </div>
     <div class=" form-group ">  
   
   </div>
     
     <input type="submit" class="log-btn  form-control"  value="submit">
     
    </form>
   </div>

  
  
  
  
  
  



            

   


</div><!-- end of container-->












<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="query.js"></script>
</body>
</html>