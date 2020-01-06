<!DOCTYPE html>
<html lang="de"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wormer Musek - Harmonie Wormeldange">
    <meta name="author" content="Steve Klicek" >
    <!--<link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">-->

    <title>Willkommen - Rechenaufgaben</title>
       
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
	</style>

  </head>

  <body>
     
	<!-- Wrap all page content here -->
    <div id="wrap">
   	<!-- Begin page content -->
      <div class="container">
		<?php
//initialisierungen
$alles_ok=true;
$max_zahl=0;
$rechenart="add";
$eingabe=$zahl1=$zahl2=$res="";
$eingabe_ok=true;

//formular wurde abgesendet		
if(isset($_POST['max_zahl'])) {
	$max_zahl=$_POST['max_zahl'];
	$rechenart=$_POST['rechenart'];
		
	//formular wird ausgewertet
	if(!is_numeric($max_zahl)){
		echo "<center>";
		echo "<h3>Fehler bei der Eingabe: keine Zahl</h3><br>";
		echo "</center>";
		$alles_ok=false;
	}
	if ($rechenart==""){
		echo "<center>";
		echo "<h3>Fehler bei der Eingabe: keine Rechenart</h3><br>";
		echo "</center>";
		$alles_ok=false;
	}
	if (!$alles_ok){
		echo "<center>";
		echo "<a class='btn btn-primary' href='index.php'>Zurück</a>";
		echo "</center>";
		$alles_ok=false;
	}
}

if ($alles_ok){
?>
		<h1 class="yellow">
			<center>Aufgabe</center>
		</h1>
		<h3 class="yellow">
			<center>Maximum: <?=$max_zahl;?></center>
		</h3>
				
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
			<form method="post" action="korrigieren.php">
			<input type="hidden" name="max_zahl" value="<?=$max_zahl;?>">
			<input type="hidden" name="rechenart" value="<?=$rechenart;?>">
			<?php
			$resultat=0;
			$nbr=0;
			//eine Aufgabe stellen
			while($nbr<1) {
				$zahl1=mt_rand(2, $max_zahl);
				$zahl2=mt_rand(2, $max_zahl);
				if ($rechenart=="add"){
					$resultat=$zahl1+$zahl2;
				} elseif ($rechenart=="sub"){
					$resultat=$zahl1-$zahl2;
				} elseif ($rechenart=="mul"){
					$resultat=$zahl1*$zahl2;
				} elseif ($rechenart=="div"){
					$resultat=$zahl1/$zahl2;
				} 
				if ($rechenart=="add"){
					if ($resultat<=$max_zahl and $resultat>=0){
						?>
						<input type="hidden" name="zahl1" value="<?=$zahl1;?>">
						<input type="hidden" name="zahl2" value="<?=$zahl2;?>">
						<input type="hidden" name="res" value="<?=$resultat;?>">
						<h2>
						<center>
						<?=$zahl1;?> + <?=$zahl2;?> = <input type="text" name="eingabe">
						</center>
						</h2>
						<br>
						<center>
							<input type="submit" class="btn btn-primary" value="Verbessern">
						</center>
						<?php
						$nbr++;
					}
				} elseif ($rechenart=="sub"){
					if ($zahl1<=$max_zahl and $resultat>=0){
						?>
						<input type="hidden" name="zahl1" value="<?=$zahl1;?>">
						<input type="hidden" name="zahl2" value="<?=$zahl2;?>">
						<input type="hidden" name="res" value="<?=$resultat;?>">
						<h2>
						<center>
						<?=$zahl1;?> - <?=$zahl2;?> = <input type="text" name="eingabe">
						</center>
						</h2>
						<br>
						<center>
							<input type="submit" class="btn btn-primary" value="Verbessern">
						</center>
						<?php
						$nbr++;
					}
				} elseif ($rechenart=="mul"){
					if ($zahl1<=$max_zahl and $resultat>=0 and $resultat<=$max_zahl){
						?>
						<input type="hidden" name="zahl1" value="<?=$zahl1;?>">
						<input type="hidden" name="zahl2" value="<?=$zahl2;?>">
						<input type="hidden" name="res" value="<?=$resultat;?>">
						<h2>
						<center>
						<?=$zahl1;?> * <?=$zahl2;?> = <input type="text" name="eingabe">
						</center>
						</h2>
						<br>
						<center>
							<input type="submit" class="btn btn-primary" value="Verbessern">
						</center>
						<?php
						$nbr++;
					}
				} elseif ($rechenart=="div"){
					if ($zahl1<=$max_zahl and $zahl2>0 and $resultat>=0 and is_int($resultat)){
						?>
						<input type="hidden" name="zahl1" value="<?=$zahl1;?>">
						<input type="hidden" name="zahl2" value="<?=$zahl2;?>">
						<input type="hidden" name="res" value="<?=$resultat;?>">
						<h2>
						<center>
						<?=$zahl1;?> : <?=$zahl2;?> = <input type="text" name="eingabe">
						</center>
						</h2>
						<br>
						<center>
							<input type="submit" class="btn btn-primary" value="Verbessern">
						</center>
						<?php
						$nbr++;
					}
				}
			}
			?>
			</br>
			<center>
			<a onclick="window.location.href='index.php';" class="btn btn-success">Andere Rechnungen erstellen</a>
			</center>
			</form>
			</div>	
		</div>
		<?php
		
}
?>		
	</div>
	</div>	
   <div id="footer">
     	<div class="container">
     		<p class="text-muted">(c) 2017 by Steve Klicek
	  			<small><label class="pull-right">created by Steve Klicek</label></small>
     		</p>
     	</div>
   </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="css/jquery-1.js"></script>
    <script src="css/bootstrap.js"></script>
  

</body></html>
