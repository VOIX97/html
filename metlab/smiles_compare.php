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
				<span>Design by <a href="这里写Wiki网址" rel="nofollow">SJTU-software</a></span> </div>
			<div id="menu">
				<ul>
					<li><a href="index.html" accesskey="1" title="">Homepage</a></li>
					<li class="current_page_item"><a href="sbml_drawer.html" accesskey="2" title="">SBML Drawer</a></li>
					<li><a href="sbml_differ.html" accesskey="3" title="">SBML Differ</a></li>
					<li class="current_page_item"><a href="met_differ.html" accesskey="4" title="">MET Differ</a></li>
					<li><a href="smiles_drawer.html" accesskey="5" title="">SMILES Drawer</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper2">
		<div id="welcome" class="container">
			<div class="title">
				<h2>SMILES COMPARE result</h2>
			</div>
			<?php
			$smiles2 = $_POST['smiles2'];
			$smiles1 = $_POST['smiles1'];
			echo $smiles1;
			echo $smiles2;
			$command = 'SMILE_sim.py '.$smiles1.' '.$smiles2 ;
			exec($command,$array); 
			print_r($array);
			?>
		</div>
	</div>
</body>
</html>
