
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>tablecleintsabsents</title>

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

<div class="container">
  
  
  
  
  
  
  <div class="login-form">
<form action="affichevoyagesp.php" method="get"  >
     <h1>voyages</h1>
     <div class="form-group ">
         <input type="date" class="form-control"  id="date"  value="" name="date">
     </div>
     <div class=" form-group ">
    <select  id="ligne" name="ligne"   class="form-control">
       
       <option >select ligne:</option>
       <option value="nouakchott-nema">nouakchott-nema</option>
       <option value="nouakchott-tnbgda">nouakchott-tnbgda </option>
       <option value="nouakchott-tganet">nouakchott-tganet</option>
       
       
       </select>
       
      
   
   
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