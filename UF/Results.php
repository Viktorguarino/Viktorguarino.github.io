<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="script.js"></script>
<title>UF</title>
</head>

<body>
	<div id="container">	
        <header>
        	<a href="Index.php"><img src="text.png" alt="logo"></a>
      	</header>
        <nav>
            <ul>
            	<li>
                    <a href="#">INFO</a>
                </li>
                <li>
                	<a href="#">MALLAR</a>
                </li>
                <li>
                    <a href="#">VIDEO</a>
                </li>
                <li>
                	<div class="searching">
                       	<form action="Results.php" method="get">
                        	<input type="text" name="k" id="search" placeholder="SEARCH" value="<?php echo $_GET['k']; ?>"/>
                   			<input class="btnSearch" value="search" type="submit"/>
                        </form>
                    </div>
                </li>
                <li>
                	<a href="#">KÖP</a>
                </li>
        	</ul>
        </nav>
        <article>
        	<div class="searchingTwo">
            	<form action="Results.php" method="get">
                	<input type="textTwo" name="k" id="searchTwo" placeholder="SEARCH" value="<?php echo $_GET['k']; ?>"/>
                    <input class="btnSearchTwo" value="search" type="submit"/>
                </form>
                <hr>
            </div>
        </article>
        <footer>
        	<div class="footerContainer">
            	<div class="footerContent">
                    <div class="column logo">
                    	<a href="Index.php"></a>
                    </div>
                    <div class="column social">
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                    <div class="column info">
                        <a href="Index.php">TERMS OF USE</a>
				     	<a href="Index.php">WEBSITE PRIVACY POLICY</a>
                        <a href="Index.php">CONTACT US</a>
                    </div>
                    <div class="bottom">
                    	<p>© COPYRIGHT 2017, WEB CREATOR</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>