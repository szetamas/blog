<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Megrim|Open+Sans:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="/../main.css">
	<title>Tisztalap</title>
	<script src="/../load.js"></script> 
</head>
<body style="background-color:white" onLoad="load(4,'</h1>','out2','class','dropdown-item text-primary');">
	<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #80bfff;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="height: 5rem;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="/../index.html">Főoldal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/../rolunk.html">Rólunk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/../kapcsolat.html">Kapcsolat</a>
				</li>
				<li class="nav-item dropdown text-nowrap">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cikkek</a>
					<div id="out2" class="dropdown-menu" aria-labelledby="navbarDropdown">
						<h1 class="text-primary font-weight-bold">Összes cikk:</h1>
						<a class="dropdown-item text-primary" href="osszescikk.html">
							<h1 class="font-weight-bold">&#8721;</h1>
						</a>
						<h1 class="text-primary font-weight-bold">Legutóbbiak:</h1>
					</div>
				</li>
			</ul>
			<a href="https://www.facebook.com/tisztalap1" target="_blank"><img src="/../flogo.png" width="160" height="80" alt="fblogo"></a>
		</div>
    </nav>
	<h1 class="text-center display-1" style="font-family: 'Megrim', cursive; margin-top: 5rem;">Tiszta Lap</h1>
	<noscript>A javascript ki van kapcsolva, így előfordúlhat, hogy az oldal nem megfelelően működik.</noscript>
		<div id="out" class="container-fluid">
		<?php
			$name=$_GET["name"];	//i get it tha filename(without .txt)
			$name=$name.".txt";		//this gets the format type
			if(file_exists($name))		//i check that have i the file
			{
				$filread=fopen($name,"r");		//open read (filepointer at the beginning)
				$stra=fread($filread,filesize($name));	//read txt
				fclose($filread);	//close file
				echo $stra;		//write out the text
			}
			else
			{
				echo "A fájl nem létezik, sajnálom(File doesn't exist, sorry) :(";		//another else write out the problem
			}
		?>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
