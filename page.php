<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Transport</title>
<link rel="stylesheet" href="app/css/bootstrap.css" />
<style>
body {
	background:url(Grey-background-for-site11.jpg);
}
.cnx {
	margin-top:100px;
}
label {
	color:#393d60;
}
.log_btn {
	background-color:#007fd9;
}
.log_btn:hover {
	background-color:#393d60;
}
.in{
	margin-top:4px;
}
</style>
</head>
<body>

<div class="container cnx">
	<div class="row">
        <div class="col-xs-4 col-xs-pull-4 col-xs-push-4">
            <img alt="logo" class="img-responsive" src="12.ico" />
        </div>
    </div>
	<div class="row">
		<div class="col-xs-4 col-xs-pull-4 col-xs-push-4">
			<form role="form" method="post" action="">
				<div class="row in">
                <div class="form-group <?php if($clsu) echo 'has-error';?>">
					<label class="col-xs-4 control-label" for="username">Utilisateur: </label>
					<div class="col-xs-7">
						<input type="text" id="user" class="form-control" placeholder="Nom d'utilisateur" name="user" value="<?php if(!empty($_POST['user'])) echo $_POST['user'];?>"/>
					</div>
				</div>
                </div>
                <div class="row in">
				<div class="form-group <?php if($clsp) echo 'has-error';?>">
					<label class="col-xs-4 control-label" for="password">Mot de pass: </label>
					<div class="col-xs-7">
						<input type="password" class="form-control" placeholder="Mot de pass" name="pass" />
					</div>
				</div>
                </div>
                <div class="row in">
                	<div class="form-group">
                    	<div class="col-xs-4  col-xs-push-8">
							<input type="submit" class="btn btn-primary log_btn" value="Login" name="log" />
						</div>
                    </div>
                 </div>
			</form>
		</div>
	</div>
</div>
<script language="javascript" src="app/js/bootstrap.js"></script>
</body>
</html>