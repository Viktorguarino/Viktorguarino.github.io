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
                   			<input class="btnSearch" value="" type="submit"/>
                        </form>
                    </div>
                </li>
                <li>
                	<a href="#">KÖP</a>
                </li>
        	</ul>
        </nav>
        <article>
        	<div class="contact">
            	<ol>
                	<li>
                    	<div class="cirlce"><img src="viktorbild.png"></div>
                        <div class="contactinfo"> 
                            <h2>Simon Måtegen</h2>
                            <h3><span>CEO / <i>Verkställande Direktor</i></span></h3>
                            <br>
                            <h3><span>+46 720 133 850</span></h3>
                            <h3><span>example@hotmail.com</span></h3>
                        </div>
                    </li>
                    <li>
                    	<div class="cirlce"><img src="viktorbild.png"></div>
                        <div class="contactinfo"> 
                            <h2>Viktor Guarino</h2>
                            <h3><span>CTO / <i>Webmaster</i></span></h3>
                            <br>
                            <h3><span>+46 720 133 850</span></h3>
                            <h3><span>example@hotmail.com</span></h3>
                        </div>
                    </li>
                    <li>
                    	<div class="cirlce"><img src="viktorbild.png"></div>
                        <div class="contactinfo"> 
                            <h2>Jonathan Zander</h2>
                            <h3><span>CFO / <i>Finansdirektör</i></span></h3>
                            <br>
                            <h3><span>+46 720 133 850</span></h3>
                            <h3><span>example@hotmail.com</span></h3>
                        </div>
                    </li>
                </ol>
            </div>
            <div id="slide">click me</div>

        </article>
        <footer>
        	<div class="footerContainer">
            	<div class="footerContent">
                    <div class="column logo">
                    	<a href="Index.php"></a>
                    </div>
                    <div class="column social">
                        <a href="https://www.facebook.com/Web-Creator-1764341753865008/"></a>
                        <a href="#"></a>
                    </div>
                    <div class="column info">
                        <a href="Terms of use.php">TERMS OF USE</a>
				     	<a href="Website privacy policy.php">WEBSITE PRIVACY POLICY</a>
                        <a href="Contact us.php">CONTACT US</a>
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