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
					<li class="current_page_item"><a href="met_differ.html" accesskey="4" title="">MET Differ</a></li>
					<li><a href="smiles_drawer.html" accesskey="5" title="">SMILES Drawer</a></li>
					<li><a href="dna_editor.html" accesskey="6" title="">DNA Editor</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper2">
		<div id="welcome" class="container">
		<header class="mb-5"><h1>Your file</h1></header>
			<?php
			$file_size=$_FILES['myfile']['size'];
			$file_type=$_FILES['myfile']['type'];

			if(is_uploaded_file($_FILES['myfile']['tmp_name'])) {

				$uploaded_file=$_FILES['myfile']['tmp_name'];

				$file_true_name=$_FILES['myfile']['name'];
				$move_to_file="/var/www/html/".$_FILES['myfile']['name'];
				if(move_uploaded_file($uploaded_file,$move_to_file)) {
					echo $_FILES['myfile']['name']." upload success"."<br>";
					echo "<br>";
					sleep(1000);
					echo '<img src=test1.jpg height="400">';
					echo "<header class=\"mb-5\"><h1>&nbsp;</h1></header>";
					echo "<div class=\"title\">";
						echo "<h2>Met differ result:</h2>";
				
						echo "<header class=\"mb-5\"><h1>The red part is the matching part</h1></header>";
				
					echo "</div>";
			
		
					echo '<img src=test.jpg height="1000">';
					
				} 
				else {
					echo "no file";
				}
			} 
			else {
				echo "no file"."<br>";
			}
		?>
	
		</div>
	</div>

<!--div id="footer" class="container">
	<div class="title">
		<h2>Get in touch</h2>
		<span class="byline">Phasellus nec erat sit amet nibh pellentesque congue</span> </div>
	<ul class="contact">
		<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
		<li><a href="#" class="icon icon-facebook"><span></span></a></li>
		<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
		<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
		<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
	</ul>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div-->
</body>
</html>
