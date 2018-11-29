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

</head>
<body>
<div id="wrapper1">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo"> <img src='1.png' width = '200' height = '124' >
				<h1><a href="index.html"><span>S</span>bml<span>D</span>iffer</a></h1>
				<span>Design by <a href="http://2018.igem.org/Team:SJTU-software" rel="nofollow">SJTU-software</a></span> </div>
			<div id="menu">
				<ul>
					<li><a href="index.html" accesskey="1" title="">Homepage</a></li>
					<li><a href="sbml_drawer.html" accesskey="2" title="">SBML Drawer</a></li>
					<li class="current_page_item"><a href="sbml_differ.html" accesskey="3" title="">SBML Differ</a></li>
					<li><a href="met_differ.html" accesskey="4" title="">MET Differ</a></li>
					<li><a href="smiles_drawer.html" accesskey="5" title="">SMILES Drawer</a></li>
					<li><a href="dna_editor.html" accesskey="6" title="">DNA Editor</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper2">
		<div id="welcome" class="container">
			<div class="title">
				<h2>Result</h2>
			</div>
			<?php
    //get filesize
    $file_size1=$_FILES['myfile1']['size'];
	$file_size2=$_FILES['myfile2']['size'];
	//get filename
    $file_type1=$_FILES['myfile1']['type'];
	$file_type2=$_FILES['myfile2']['type'];
    //if success
    if(is_uploaded_file($_FILES['myfile1']['tmp_name'])) {
        $uploaded_file1=$_FILES['myfile1']['tmp_name'];
        $file_true_name1=$_FILES['myfile1']['name'];
        $move_to_file1="/var/www/html/".$_FILES['myfile1']['name'];

        if(move_uploaded_file($uploaded_file1,iconv("gb2312","utf-8",$move_to_file1))) {
            echo $_FILES['myfile1']['name']." upload success"."<br>";
			echo "<br>";
        } else {
            echo "fail";
        }
    } else {
        echo "fail"."<br>";
    }
	
	    
    if(is_uploaded_file($_FILES['myfile2']['tmp_name'])) {
        $uploaded_file2=$_FILES['myfile2']['tmp_name'];
        $file_true_name2=$_FILES['myfile2']['name'];
        $move_to_file2="/var/www/html/".$_FILES['myfile2']['name'];
		
        if(move_uploaded_file($uploaded_file2,iconv("gb2312","utf-8",$move_to_file2))) {
            echo $_FILES['myfile2']['name']." upload success"."<br>";
			echo "<br>";
        } else {
            echo "fail1";
        }
    } else {
        echo "fail2"."<br>";
    }
	
    $command1 = 'sbml-diff.py '.$_FILES['myfile1']['name'].' '.$_FILES['myfile2']['name'].' --outfile '.$_FILES['myfile1']['name'].'.dot' ;
	$command2 = 'dot -Tpng '.$_FILES['myfile1']['name'].'.dot -o '.$_FILES['myfile1']['name'].'.png';
    exec($command1);
	exec($command2);
	echo '<img src='.$_FILES['myfile1']['name'].'.png height="1000">';
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
