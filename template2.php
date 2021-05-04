<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="styles/stylesheet.css"
    </head>
    <body>
    	<div id="wrapper">
    		<div id="banner">

    		</div>

    		<nav id="navigation">
    			<ul id="nav">
    				<li><a href="index.php">Home</a></li>
                    <li><a href="coffeemenu.php">Coffee Menu</a></li>
                    <li><a href="gallery.php">Coffee Gallery</a></li>  
                    <li><a href="shop.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
    		</nav>

    		<div id="content_area">
    			<?php echo $content; ?>
    		</div>

    		<footer>
    			<p>All Rights Reserved</p>
    		</footer>
        </div>
    </body>
