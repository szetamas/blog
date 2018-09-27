<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Megrim|Open+Sans:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
	<script src="../jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="../main.css">
	<title>Tisztalap</title>
	<script src="../jquery.load.js"></script>
	<script src="../main.js"></script>
</head>
<body>
	<nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style="height: 5rem;">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="../index.html">Főoldal</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../rolunk.html">Rólunk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../kapcsolat.html">Kapcsolat</a>
				</li>
				<li class="nav-item dropdown text-nowrap">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cikkek</a>
					<div id="out2" class="dropdown-menu" aria-labelledby="navbarDropdown">	
						<a href="../osszescikk.html">
							<h1 class="font-weight-bold">Továbbiak</h1>
						</a>
					</div>
				</li>
			</ul>
			<a href="https://www.facebook.com/tisztalap1" target="_blank"><img src="../flogo.png" width="160" height="80" alt="fblogo"></a>
		</div>
    </nav>
	<h1 id="cim" class="text-center display-1">Tiszta Lap</h1>
	<noscript>A javascript ki van kapcsolva, így előfordúlhat, hogy az oldal nem megfelelően működik.</noscript>
		<div id="out" class="container-fluid">
		<?php
			$name=$_GET["name"];	//i get it tha filename(without .txt)
			$name=$name.".txt";		//this gets the format type
			if(file_exists($name))		//i check that have the file
			{
				$filread=fopen($name,"r");		//open read (filepointer at the beginning)
				$stra=fread($filread,filesize($name));	//read txt
				fclose($filread);	//close file
				echo $stra;		//write out the text
			}
			else
			{
				echo "A fájl nem létezik, sajnálom(The file doesn't exist, sorry) :(";		//another else write out the problem
			}
		?>
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	</body>
</html>

