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


function ligne(s1,s2,s3){
	
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	var s3 = document.getElementById(s3);
	 
				 s2.innerHTML="";
	 s3.innerHTML="";
	 var n = document.createElement("option");
			     n.value = "select point depart";
			     n.innerHTML = "select point depart";
				  s2.options.add(n);
				   var e = document.createElement("option");
			     e.value = "select point d'arriver";
			     e.innerHTML = "select point d'arriver";
				  s3.options.add(e);
	 
	if(s1.value=="nouakchott-nema" || s1.value=="nema-nouakchott"){
		
		var option =["nouakchott|nouakchott","BOUTILIMITT|BOUTILIMITT","ALEG|ALEG","shegar|shegar","MAKTAA LAHHJAR|MAKTAA LAHHJAR","centgrave|centgrave","atwijgjite|atwijgjite","ashrame|ashrame","siyasa|siyasa","lgayra|lgayra","camore|camore","GUEROU|GUEROU","kiffa|kiffa","fame l54yrat| fame l54yrat","viraje tamshk6|viraje tamshk6","TINTANE|TINTANE","AIOUN|AIOUN","kobni|kobni","tnbd9a|tnbd9a","nema|nema"];
		
		
	}else if(s1.value=="nouakchott-Nouadhibou" || s1.value=="Nouadhibou-nouakchott"){
		
		var option =["nouakchott|nouakchott","Nouadhibou|Nouadhibou"];
		
		
	}else if(s1.value=="nouakchott-tganet" || s1.value=="tganet-nouakchott"){
		
		var option =["nouakchott|nouakchott","BOUTILIMITT|BOUTILIMITT","ALEG|ALEG","shegar|shegar","MAKTAA LAHHJAR|MAKTAA LAHHJAR","centgrave|centgrave","tjikja|tjikja"];
		
		
	}
		for(var op in option){
	
			var t = option[op].split("|");
			var newoption = document.createElement("option");
			newoption.value = t[0];
			newoption.innerHTML = t[1];
		   var news = document.createElement("option");
           news.value = t[0];
			news.innerHTML = t[1];
			s2.options.add(newoption);
			s3.options.add(news);
			
			}
}
	
/---------------------------------/
function price(prix,s2,s3){
	
	
	  var prix = document.getElementById(prix);
	  var s2 = document.getElementById(s2);
	  var v2 ;
	  var s3 = document.getElementById(s3);
	  var v3;
	  
              
				 				 
	  
	  var ar =[0,2000,4000,4500,5000,5500,8000,6000,7000,7000,7000,8000,8000,8000,8500,9000,10000,10500,11000,11500,12000,13000];
	      /*-------------------------------------------------------------------------------------------------------------//
		   ["|","0|nouakchott","1|BOUTILIMITT","2|ALEG","3|shegar","4|MAKTAA 
		                      LAHHJAR","5|centgrave","6|atwijgjite","7|ashrame","8|siyasa","9|lgayra",
		                               "10|camore","11|GUEROU","12|kiffa","13| fame l54yrat","14|viraje 
		                              tamshk6","15|TINTANE","16|AIOUN","17|kobni","18|tnbd9a","19|nema"];
		  //-------------------------------------------------------------------------------------------------------------*/
	
		 	var tab =["nouakchott","BOUTILIMITT","ALEG","shegar","MAKTAA LAHHJAR","centgrave","tjikja","atwijgjite","ashrame","siyasa","Nouadhibou","lgayra","camore","GUEROU","kiffa","fame l54yrat","viraje tamshk6","TINTANE","AIOUN","kobni","tnbd9a","nema"];
		                      
		                              
		                             
		 for(i=0;i<=19;i++){
			if(s2.options[s2.selectedIndex].value==tab[i]){
				 v2 =i;
				
				
				}
				if(s3.options[s3.selectedIndex].value==tab[i]){
				 v3 =i;
				
				
				}			 
			 }
		  
	  var p1 = ar[v2];
	  var p2 = ar[v3];
	 
	   if(p1>p2){
		   
		   var p3 = p1-p2;
		   
		   }else if(p2>p1){
			   var p3 = p2-p1;
			   }else{
				   
				   var p3 = 0;
				   }
	  var news = document.createElement("option");
	  
			   prix.innerHTML="";
			   prix.value="select prix:";
			     var n = document.createElement("option");
			      
			     n.innerHTML = "select prix:";
			       prix.options.add(n)
         
			/*news.innerHTML = "";*/
						   news.value = p3;
		   news.innerHTML = p3;
	      prix.options.add(news);
	}
	 //-------------------------------------------------------------------------------------------------------------*/
	 					/*	var option =["|","1|chaise1","2|chaise2","3|chaise3","4|chaise1","5|chaise5","6|chaise6","7|chaise7","8|chaise8","9|chaise9","10|chaise10","11|chaise11","12|chaise12","13|chaise13","14| chaise14"];*/
							
					function chaises(date,lig,ch){
		
		var date = document.getElementById(date).value;
		var lig = document.getElementById(lig).value;
		var ch = document.getElementById(ch);
   /* window.location = "?date"+ date +"$lig"+lig;*/
	/*;
	for(i=0;i<=js.length;i++){
		 js[i]="|chaise"+i;
		
		}
  
				for(var op in js){
					
			
			var t = js[op].split("|");
			var newoption = document.createElement("option");
			newoption.value = t[0];
			newoption.innerHTML = t[1];
			ch.options.add(newoption);
			}
			*/
			
			
			
			
		
		}

	
		//-------------------------------------------------------------------------------------------------------------*/
		
	function bg(kg,prixbag){
			var kg = document.getElementById(kg);
		   var prixbag = document.getElementById(prixbag);
		 prixbag.innerHTML="";
		var n = document.createElement("option");
			     n.value = "select prix:";
			     n.innerHTML = "select prix:";
				  prixbag.options.add(n);
				
		switch(kg.value){
			
			
			case "0kg":{
				
				var newoption = document.createElement("option");
			     newoption.value = "0";
			     newoption.innerHTML = "0";
				 
			     prixbag.options.add(newoption);
			     break;
				}
			
			case "1kg":{
				
				var newoption = document.createElement("option");
			     newoption.value = "2000";
			     newoption.innerHTML = "2000";
				
			     prixbag.options.add(newoption);
			     break;
				}
			case "2kg":{
			
				var newoption = document.createElement("option");
			     newoption.value = "4000";
			     newoption.innerHTML = "4000";
				 
			     prixbag.options.add(newoption);
			     break;
				}
				case "3kg":{
				
				var newoption = document.createElement("option");
			     newoption.value = "6000";
			     newoption.innerHTML = "6000";
			
			     prixbag.options.add(newoption);
			     break;
				}
				case "4kg":{
				
				var newoption = document.createElement("option");
			     newoption.value = "8000";
			     newoption.innerHTML = "8000";
				
			     prixbag.options.add(newoption);
			     break;
				}
				case "5kg":{
					
				var newoption = document.createElement("option");
			     newoption.value = "10000";
			     newoption.innerHTML = "10000";
				
			     prixbag.options.add(newoption);
			     break;
				}	
			
			}
		
			
			
			}
			/-----------------///
			
			///////-------------------------submit form
			



		function FormValidation(){

       var n =document.getElementById('nom');
	   var t =document.getElementById('tel');
	   var l =document.getElementById('list');
	   var l1 =document.getElementById('list1');
	   var p =document.getElementById('prenom');
	   var l2=document.getElementById('list2');
	   var dat =document.getElementById('date');
	   var prix =document.getElementById('prix');
	   	var prixbag=document.getElementById('prixbag');
        	var c =document.getElementById('cartedandite');
			 var kg =document.getElementById('kg');
    if(n.value ==''){
        n.style.borderColor="rgba(234, 0, 0, 0.81)";
		n.focus();
                return false;

    }else if(n.value !=''){
		n.style.borderColor="#72a8c7";
		  n.focus();
		}
		//-----------------------------//
	 if(l.value =='select ligne:'){
        l.style.borderColor="rgba(234, 0, 0, 0.81)";
		l.focus();
                return false;

    }else if(l.value !='select ligne:'){
		l.style.borderColor="#72a8c7";
		  l.focus();
		}
		//-----------------------------//
	 if(l1.value =='select point depart'){
        l1.style.borderColor="rgba(234, 0, 0, 0.81)";
		l1.focus();
                return false;

    }else if(l1.value !='select point depart'){
		l1.style.borderColor="#72a8c7";
		  l1.focus();
		}
  	//-----------------------------//
	 if(l2.value =="select point d'arriver"){
        l2.style.borderColor="rgba(234, 0, 0, 0.81)";
		l2.focus();
                return false;

    }else if(l2.value !="select point d'arriver"){
		l2.style.borderColor="#72a8c7";
		  l2.focus();
		}
		
			//-----------------------------//
	 if(p.value ==''){
        p.style.borderColor="rgba(234, 0, 0, 0.81)";
		p.focus();
                return false;

    }else if(p.value !=''){
		p.style.borderColor="#72a8c7";
		  p.focus();
		}
			//-----------------------------//
	 if(dat.value ==''){
        dat.style.borderColor="rgba(234, 0, 0, 0.81)";
		dat.focus();
                return false;

    }else if(dat.value !=''){
		dat.style.borderColor="#72a8c7";
		  dat.focus();
		}
		//-----------------------------//
	 if(prix.value =="select prix:"){
        prix.style.borderColor="rgba(234, 0, 0, 0.81)";
		prix.focus();
                return false;

    }else if(prix.value !="select prix:"){
		prix.style.borderColor="#72a8c7";
		  prix.focus();
		}
		//-----------------------------//
	 if(kg.value =='select kg:'){
      kg.style.borderColor="rgba(234, 0, 0, 0.81)";
		kg.focus();
                return false;

    }else if(kg.value !='select kg:'){
		kg.style.borderColor="#72a8c7";
		  kg.focus();
		}
			//-----------------------------//
	 if(prixbag.value =='select prix:'){
       prixbag.style.borderColor="rgba(234, 0, 0, 0.81)";
		prixbag.focus();
                return false;

    }else if(prixbag.value !='select prix:'){
		prixbag.style.borderColor="#72a8c7";
		  prixbag.focus();
		}
		//-----------------------------//
	 if(c.value ==''){
      c.style.borderColor="rgba(234, 0, 0, 0.81)";
		c.focus();
                return false;

    }else if(c.value !=''){
		c.style.borderColor="#72a8c7";
		  c.focus();
		}
		
		//-----------------------------//
	 if(tel.value ==''){
      tel.style.borderColor="rgba(234, 0, 0, 0.81)";
		tel.focus();
                return false;

    }else if(tel.value !=''){
		tel.style.borderColor="#72a8c7";
		 tel.focus();
		}
		 if(l1.value ==l2.value){
	 l1.style.borderColor="rgba(234, 0, 0, 0.81)";
		l1.focus();
		 l2.style.borderColor="rgba(234, 0, 0, 0.81)";
		l2.focus();
		alert("point depart doit etre different a point d'arriver");
                return false;
		 
		}
  
  
}
</script>


   
 
  </head>
  <body>
 

<div class="container-fluid">
<form action="verifyagance.php"  method="get" onsubmit="return FormValidation();" >

<div class="login-form  form-inline"  role="form">
<h1>inscrivez-vous pour voyager à l'état</h1>
     
<div class="row">
  <div class=" form-group col-md-2">
   <label class=" control-label"><h4>votre nom :</h4></label> 
  </div>
   <div class="  form-group col-md-2 col-md-push-1">
   
   <label class=" control-label"><h4>ligne:</h4></label>
   </div>
    <div class=" form-group col-md-4  col-md-push-2">
    <label class=" control-label"><h4>point depart :</h4></label>
    </div>
     <div class=" form-group col-md-4 col-md-push-1">
     <label class=" control-label"><h4>point d'arriver :</h4></label>
     </div>
 </div><!---row1-->
 
<div class="row">

<div class="form-group col-md-3">
       <input type="text" class="form-control" placeholder="votre nom"  name="nom" id="nom" pattern="[A-Za-z]{4,10}" title="votre nom doit Être en varchar">
 </div>


   <div class=" form-group col-md-1 col-md-offset-0">
    <select  id="list" name="list" onChange="ligne(this.id,'list1','list2');"    class="form-control">
       
       <option >select ligne:</option>
       <option value="nouakchott-nema">nouakchott-nema</option>
       <option value="nouakchott-Nouadhibou">nouakchott-Nouadhibou </option>
       <option value="nouakchott-tganet">nouakchott-tganet</option>
       <option value="nema-nouakchott">nema-nouakchott</option>
       <option value="Nouadhibou-nouakchott">Nouadhibou-nouakchott </option>
       <option value="tganet-nouakchott">tganet-nouakchott</option>
       
       </select>
       
   
   
   </div>
    <div class=" form-group col-md-4 col-md-offset-2 ">
    
     <select  id="list1" name="list1"  class="form-control"  >
       
       <option >select point depart</option>
      
       
       
       </select>
       
      
    
    
    
    </div>
     <div class=" form-group  col-md-2 col-md-pull-1">
      <select  id="list2" name="list2"   onChange="price('prix','list1',this.id);"    class="form-control" >
       
       <option > select point d'arriver</option>
      
       
       
       </select>
       
       
     
     
     </div>




 </div><!---row2-->
<!-- <br>-->
 <div class="row">
 
 <div class=" form-group col-md-2">
   <label class=" control-label"><h4>votre prenom :</h4></label> 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
   <label class=" control-label"><h4>date de voyage :</h4></label> 
  </div>
 <div class=" form-group col-md-3 col-md-push-1">
   <label class=" control-label"><h4>prix de voyage :</h4></label> 
  </div>
  <div class=" form-group col-md-3 col-md-push-1">
   <label class=" control-label"><h4> prix de bagage :</h4></label> 
  </div>
 
 
 
 
 
 
 
 
 
 
 </div><!---row3-->
 
 <div class="row">
 
 <div class="form-group log-status   col-md-2">
       <input type="text" class="form-control" placeholder="prenom" id="prenom" name="prenom"pattern="[A-Za-z]{4,10}" title="votre prenom doit Être en varchar">
     </div>
  
  
  <div class="form-group  col-md-2 col-md-push-1" >
       <input type="date" class="form-control"  id="date"  value="" name="date">
     </div>
 
 <div class="form-group col-md-2 col-md-push-2 ">
       <select  id="prix" name="prixvoya"  class="form-control" >
        
       <option >select prix:</option>
      
       
       
       </select>
       
     </div>
 
 <div class="form-group col-md-2 col-md-push-3 ">
       <select  id="prixbag" name="prixbag"   class="form-control" >
       
       <option >select prix:</option>
      
       
       
       </select>
       
     </div>
 
 
 </div><!---row4-->
 <div class="row">
 
 
 <div class=" form-group col-md-3">
   <label class=" control-label"><h4>votre carte d'endite :</h4></label> 
  </div>
  
 <div class=" form-group col-md-3">
   <label class=" control-label"><h4>poids votre bagages :</h4></label> 
  </div>
  
  
  
  <div class=" form-group col-md-4">
    <label class=" control-label"><h4>votre tel :</h4></label> 
  </div>
  
   <div class=" form-group col-md-2 col-md-pull-1 ">
   
  </div>
 </div><!---row5-->
 
 <div class="row">
 <div class="form-group log-status col-md-2 ">
       <input type="text" class="form-control" placeholder="numero de carte d'endite" id="cartedandite"   name="cartedandite">
     </div>
     
     
      <div class="form-group  col-md-2 col-md-push-1">
       <select  id="kg" name="kg"     onChange="bg(this.id,'prixbag');" class="form-control"  >
       
       <option >select kg:</option>
         <option value="0kg">  0kg </option>
       <option value="1kg">  1kg </option>
       <option value="2kg">  2kg </option>
       <option value="3kg">  3kg </option>
       <option value="4kg">  4kg </option>
      <option value="5kg"> 5kg </option>
       
       
       </select>
     </div>
     
     
 <div class="form-group  col-md-2 col-md-push-2  ">
   <input type="tel" class="form-control" placeholder="telphone" id="tel" name="tel"pattern="[0-9]{8}" title="votre tel doit Être en integer est egale a 8 chiffers">
       
  
</div>

    <div class="form-group  col-md-2 col-md-push-3 ">
  
  
</div>
     
 </div><!---row6-->
 
 <div class="row">
 <div class=" form-group col-md-3">
  
  </div>
 </div><!---row7-->
 
<div class="row">
 <div class="form-group log-status col-md-2 ">
      
      
     </div>
     <br>
     <div class="form-group col-md-7 col-md-push-2 ">
<button type="submit" class="  btn   btn-block input-lg" >submint</button>



</div> <!--log-btn-->

    
    
    
    
 </div> <!---row8-->







 </div><!---end-->
 </form>





 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



</html>