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
     
      
      
   
  
      
   
<script type="text/javascript">
	
			
		
			function myFunction() {
    document.getElementById("MYFORM").submit();
}



function FormValidation(){

       var n =document.getElementById('nom');
	   var t =document.getElementById('tel');
	   var s =document.getElementById('source');
	   var d =document.getElementById('destination');
	   var p =document.getElementById('prenom');
	   var c =document.getElementById('cartedandite');
	   var dat =document.getElementById('date');
	   var m =document.getElementById('montant');
    if(n.value ==''){
        n.style.borderColor="rgba(234, 0, 0, 0.81)";
		n.focus();
                return false;

    }else if(n.value !=''){
		n.style.borderColor="#72a8c7";
		  n.focus();
		}
		//-----------------//
		if(t.value ==''){
		 t.style.borderColor="rgba(234, 0, 0, 0.81)";
		  t.focus();
		   return false;
		 
		}else if(!t.value ==''){
		t.style.borderColor="#72a8c7";
		  t.focus();
		}
		//---------------///
		if(s.value =='select source:'){
		 s.style.borderColor="rgba(234, 0, 0, 0.81)";
		  s.focus();
		   return false;
		 
		}else if(s.value !='select source:'){
		s.style.borderColor="#72a8c7";
		  s.focus();
		}
		//---------------///
		if(d.value =='select destination:'){
		 d.style.borderColor="rgba(234, 0, 0, 0.81)";
		  d.focus();
		   return false;
		 
		}else if(d.value !='select destination:'){
		d.style.borderColor="#72a8c7";
		  d.focus();
		}
  //---------------///
		if(p.value ==''){
		 p.style.borderColor="rgba(234, 0, 0, 0.81)";
		  p.focus();
		   return false;
		 
		}else if(!p.value ==''){
		p.style.borderColor="#72a8c7";
		  p.focus();
		}
  //---------------///
		if(c.value ==''){
		 c.style.borderColor="rgba(234, 0, 0, 0.81)";
		  c.focus();
		   return false;
		 
		}else if(!c.value ==''){
		c.style.borderColor="#72a8c7";
		  c.focus();
		}
  //---------------///
		if(dat.value ==''){
		 dat.style.borderColor="rgba(234, 0, 0, 0.81)";
		  dat.focus();
		   return false;
		 
		}else if(!dat.value ==''){
		dat.style.borderColor="#72a8c7";
		  dat.focus();
		}
		//---------------///
		if(m.value ==''|| m.value<10000  ){
		 m.style.borderColor="rgba(234, 0, 0, 0.81)";
		  m.focus();
		   return false;
		 
		}else if(!m.value ==''){
		m.style.borderColor="#72a8c7";
		  m.focus();
		}
		//---------------///
		if(s.value ==d.value){
			 s.style.borderColor="rgba(234, 0, 0, 0.81)";
		  s.focus();
		   
		    d.style.borderColor="rgba(234, 0, 0, 0.81)";
		  d.focus();
		
			alert("source est destination ne peut pas etre identique");
		
		   return false;
		 
		}
		if(n.value !='' && t.value !='' && s.value !='select source:' && d.value !='select destination:' && p.value !='' && c.value !=''&& dat.value !='' && m.value >=10000){
		
		
		   return true;
		 
		}
  
  
}




</script>

   
 
  </head>
  <body>
 <?php  include("teteagenc.php");?>

<div class="container">
<link href="fr.css" rel="stylesheet">
<form action="verifyfransfertargent.php"  method="get" id="MYFORM"   onsubmit="return FormValidation();">

<div class="login-form  form-inline"  role="form">
<h1>envoyez votre argents</h1>
     
<div class="row">
  <div class=" form-group col-md-2">
   <label class=" control-label"><h4>votre nom :</h4></label> 
  </div>
   <div class="  form-group col-md-2 col-md-push-1">
    
    <label class=" control-label"><h4>votre tel :</h4></label> 
   </div>
    <div class=" form-group col-md-4  col-md-push-2">
    <label class=" control-label"><h4>source  :</h4></label>
  
    </div>
     <div class=" form-group col-md-4 col-md-push-1">
      <label class=" control-label"><h4>destination   :</h4></label>
     </div>
 </div><!---row1-->
<div class="row">

<div class="form-group col-md-3">
       <input type="text" class="form-control" placeholder="votre nom "  name="nom"id="nom" pattern="[A-Za-z]{4,10}$" title="votre nom doit Être en varchar">
       
 </div>


   <div class=" form-group col-md-1 col-md-offset-0">
    
      <input type="tel" class="form-control" placeholder="telphone" id="tel" name="tel" pattern="[0-9]{8}" title="votre tel doit Être en integer est egale a 8 chiffers">
       
     
   
   
   </div>
    <div class=" form-group col-md-4 col-md-offset-2 ">
     <select  id="source" name="source"     class="form-control">
       
       <option >select source:</option>
       <option value="nouakchott">nouakchott</option>
       <option value="ndb">ndb </option>
       <option value="tganet">tganet</option>
       <option value="nema">nema</option>
       
       </select>
    
   
      
    
    
    
    </div>
     <div class=" form-group  col-md-2 col-md-pull-1">
    
        <select  id="destination" name="destination"     class="form-control">
       
       <option >select destination:</option>
       <option value="nouakchott">nouakchott</option>
       <option value="ndb">ndb</option>
       <option value="tganet">tganet</option>
       <option value="nema">nema</option>
       
       </select>
       
       
     
     
     </div>




 </div><!---row2-->
<!-- <br>-->
<br>
 <div class="row">
 
 <div class=" form-group col-md-2">
   <label class=" control-label"><h4>votre prenom :</h4></label> 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
    <label class=" control-label"><h4>votre carte d'identite :</h4></label> 
    
  </div>
 <div class=" form-group col-md-3 col-md-push-1">
 <label class=" control-label"><h4>date de transfer :</h4></label>
 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
      <label class=" control-label"><h4>montant :</h4></label> 
        <button type="button" class="btn "data-toggle="modal"  data-target="#mywindow">frais de transfert</button>
  </div>
 
 
 
 
 
 
 
 
 
 
 </div><!---row3-->
 <br><br>
 <div class="row">
 
 <div class="form-group log-status   col-md-2">
       <input type="text" class="form-control" placeholder="prenom" id="prenom" name="prenom" pattern="[A-Za-z]{4,10}$" title="votre prenom doit Être en varchar">
       
     </div>
  
  
  <div class="form-group  col-md-2 col-md-push-1" >
  <input type="text" class="form-control" placeholder="numero de carte d'identite" id="cartedandite"   name="cartedandite">
      
      
     </div>
 
 <div class="form-group col-md-2 col-md-push-2 ">
      <input type="date" class="form-control"  id="date"  value="" name="date">
  
        
     </div>
 
 <div class="form-group col-md-2 col-md-push-3 ">
     <input type="text" class="form-control" placeholder="inser le montant"  name="montant"id="montant"  >
     
       
     </div>
 
 
 </div><!---row4-->


 
<div class="row">
 <div class="form-group log-status col-md-3 col-md-push-9">
    
      
     </div>
     <br>
     <div class="form-group col-md-7 col-md-push-2 ">
     
     
<button type="submit" class="btn  btn-block input-lg"  >submint</button>



</div> <!--log-btn-->

    
    
    
    
 </div> <!---row8-->
 </div><!---end-->
 </form>
 <div class="row">
                <div class="col-md-12">
                    
                        <div class="modal fade" id="mywindow">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                             
                                <div class="modal-header">
                                      <h4 class="modal-title"> </h4>
                                      
                                   </div>
                                         <div class="modal-body">
                                           <h3 style="color:#AAA173;"> le frais de monant entre 10000$ est 50000$  est ---> 500$ </h3>
                                            <h3 style="color:#AAA173;"> le frais de montant > 50000$ est <=100000$  est --> 1000$ </h3>
                                             <h3 style="color:#AAA173;"> le frais de montant > 100000$   est ---> 2000$ </h3>
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







 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>>>>>>>>>>>>>>