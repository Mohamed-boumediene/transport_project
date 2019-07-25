</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>indextagnet</title>

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
   <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
          <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                      <img src="12.ico"  class="img-responsive" >
              </a>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav  navbar-right">
                    <li class="active" id="rt "><a href="indextaganet.php">acceuil</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">transfert<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">transfert argents </a></li>
                        <li><a href="#">transfert bagages</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">afficher table argents</a></li>
                         <li><a href="#">afficher table bagages</a></li>
                      
                    </ul>
                    
                   
                                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">voyages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="tablevoyages.php">Afficher voyages</a></li>
                        <li><a href="formulaire.php">noveau voyage</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">table  client absent</a></li>
                      
                    </ul>
                    
                    
                    
                    
                    
                    
                    </li>
                    
                    <li  class=""><a href="#">info sur clients</a></li>
                </ul>
                
            </div>
        </div>
    </nav>
</header><!-- end of header-->

















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="query.js"></script>
</body>
</html>