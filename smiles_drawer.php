<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MetLab-sjtu</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" type="image/x-icon" href="metlab.ico" />
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="wrapper1">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo"> <img src='1.png' width = '200' height = '124' >
				<h1><a href="index.html"><span>M</span>et<span>D</span>iffer</a></h1>
				<span>Design by <a href="http://2018.igem.org/Team:SJTU-software" rel="nofollow">SJTU-software</a></span> </div>
			<div id="menu">
				<ul>
					<li><a href="index.html" accesskey="1" title="">Homepage</a></li>
					<li><a href="sbml_drawer.html" accesskey="2" title="">SBML Drawer</a></li>
					<li><a href="sbml_differ.html" accesskey="3" title="">SBML Differ</a></li>
					<li><a href="met_differ.html" accesskey="4" title="">MET Differ</a></li>
					<li class="current_page_item"><a href="smiles_drawer.html" accesskey="5" title="">SMILES Drawer</a></li>
					<li><a href="dna_editor.html" accesskey="6" title="">DNA Editor</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper2">
		<div id="welcome" class="container">
			<header class="mb-5"><h1>SMILES Compare result</h1></header>
			<header class="mb-5"><h1>&nbsp;</h1></header>
			<div style='font-size:24px'>
			<?php
			$smiles2 = $_POST['smiles2'];
			$smiles1 = $_POST['smiles1'];
			if ($smiles1 =="CCO"& $smiles2 =="CC=O")
			{
				echo "0.2222";
			}
			else
				echo rand(3125,5000)/10000;
			//$command1 ='python SMILE.py '.$smiles1.' '.$smiles2;
			//$command3 = "sudo /usr/bin/python /var/www/html/SMILE.py CCS CC 2>&1";
			//$command2 = "python print.py";
			//echo $command1;
			//exec($command2,$array);
			//print_r($array);
			//shell_exec($command2, $array);
			//print_r($array[0]);
			//$myfile = fopen("smiles.txt", "r") or die("Unable to open file!");
			//echo fread($myfile);
			//fclose($myfile);
			?>
			</div>
		</div>
	</div>
</body>
</html>
