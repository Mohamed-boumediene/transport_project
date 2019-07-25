

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
>
<title>Untitled Document</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="u.css" rel="stylesheet" />
</head>

<script>

function FormValidation(){
//First Name Validation 
    var fn =document.getElementById('firstname');
	   var p =document.getElementById('pass');
    if(fn.value ==''){
        document.getElementById('firstname').style.borderColor="rgba(234, 0, 0, 0.81)";
		fn.focus();
                return false;

    }else if(fn.value !=''){
		 document.getElementById('firstname').style.borderColor="#72a8c7";
		  fn.focus();
		}
		if(p.value ==''){
		 p.style.borderColor="rgba(234, 0, 0, 0.81)";
		  p.focus();
		   return false;
		 
		}else if(!p.value ==''){
		p.style.borderColor="#72a8c7";
		  p.focus();
		}
		if(p.value !='' && fn.value!=''){
		return true;
		}
  
}



</script>
<body>

<div style=" width:240px; height:150px; background:url(12.ico);margin-left:223px;" >
</div>

<h1  style=" margin-top:-71px;margin-left:-60px;color:#000;">agance nouakchott</h1>
<div style=" width:240px; height:150px; background:url(12.ico);margin-left:806px;margin-top:-121px;" >
</div>

<br><br>
<div class="login-form" >
<form action="cnxn.php" method="post"    onsubmit="return FormValidation();" onchange="return FormValidation();" >
     <h1>Login</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " name="user" id="firstname" >
    
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" >
     
     </div>
     
     <input type="submit" class="log-btn  form-control"  value="submit">
     
    </form>
   </div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>
</html>