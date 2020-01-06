<!DOCTYPE html>
<html lang="de"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rechenaufgaben für kleine Mathematiker">
    <meta name="author" content="Steve Klicek" >
    
    <title>Rechenaufgaben für kleine Mathematiker</title>
       
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
	<style>
	.yellow {
		color:blue;
	}
	.gross {
		font-size:200%;
	}
	</style>

  </head>

  <body>
     
	<!-- Wrap all page content here -->
    <div id="wrap">
    
      <!-- Begin page content -->
      <div class="container">
		<h1 class="yellow"><center>Rechenaufgaben für kleine Mathematiker!</center></h1>

		<div class="row">
			<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
				<center class="yellow">Kannst du diese Rechenaufgaben lösen?</center>	
			</div>
			<p>&nbsp;</p>
			<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
				<center><img src="images/mathe.jpeg" alt="bild"/></center>	
			</div>
			
		</div>
		<p>&nbsp;</p>
		<form name="eingabe" method="post" action="aufgaben.php">		
		<div class="row">
			<div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
				<!--placeholder-->
			</div>
			<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
				<label for="max_zahl" class="yellow">Die grösste Zahl<br>die du kennst:</label>
				<input type="text" id="max_zahl" name="max_zahl" placeholder="Deine Zahl" class="form-control" required/>	
			</div>
			<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
				<label class="yellow">Rechenart:</label><br/>
				<input type="radio" name="rechenart" value="add" checked="checked"><label class="gross">&nbsp;+</label><br>
				<input type="radio" name="rechenart" value="sub"><label class="gross">&nbsp;-</label><br>
				<input type="radio" name="rechenart" value="mul"><label class="gross">&nbsp;x</label><br>
				<input type="radio" name="rechenart" value="div"><label class="gross">&nbsp;:</label>
			</div>
			<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
				<label for="go" class="yellow">&nbsp;</label><br>
				<input name="go" id="go" type="submit" class="btn btn-primary" value="Aufgaben stellen!"/>	
			</div>
			<div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
				<!--placeholder-->
			</div>
		</div>
    	</form>
		</div>	
	</div>	
   <div id="footer">
     	<div class="container">
     		<p class="text-muted">(c) 2017 by Steve Klicek
	  			<small><label class="pull-right">created by <a href="https://stevek.org">Steve Klicek</a></label></small>
     		</p>
     	</div>
   </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="css/jquery-1.js"></script>
    <script src="css/bootstrap.js"></script>
  

</body></html>
