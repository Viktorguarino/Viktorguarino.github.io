<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="script.js"></script>
<title>WebCreator</title>
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
                           	<input type="text" name="k" id="search" placeholder="  SÖK" value="<?php echo $_GET['k']; ?>"/>
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
                            <p>Simon Måtegen</p>
                            <p><span>CEO / <i>Verkställande Direktor</i></span></p>
                            <br>
                            <p><span>+46 720 133 850</span></p>
                            <p><span>example@hotmail.com</span></p>
                        </div>
                    </li>
                    <li>
                    	<div class="cirlce"><img src="viktorbild.png"></div>
                        <div class="contactinfo"> 
                            <p>Viktor Guarino</p>
                            <p><span>CTO / <i>IT-direktör - Webmaster</i></span></p>
                            <br>
                            <p><span>+46 720 133 850</span></p>
                            <p><span>example@hotmail.com</span></p>
                        </div>
                    </li>
                    <li>
                    	<div class="cirlce"><img src="viktorbild.png"></div>
                        <div class="contactinfo"> 
                            <p>Jonathan Zander</p>
                            <p><span>CFO / <i>Finansdirektör</i></span></p>
                            <br>
                            <p><span>+46 720 133 850</span></p>
                            <p><span>example@hotmail.com</span></p>
                        </div>
                    </li>
                </ol>
            </div>
            <div id="slide">
            	<div class="slideDown">What a deal!</div>
				<span class="grabPromo">Grab This Deal</span>
            </div>
        </article>
        <footer>
        	<div class="footerContainer">
            	<div class="footerContent">
                    <div class="column logo">
                    	<a href="Index.php"></a>
                    </div>
                    <div class="column social">
                        <a href="https://www.facebook.com/Web-Creator-1764341753865008/" target="_blank"></a>
                        <a href="https://www.instagram.com/webcreatorofficial/" target="_blank"></a>
                    </div>
                    <div class="column info">
                        <a href="Terms of use.php">ANVÄNDARVILLKOR</a>
				     	<a href="Website privacy policy.php">INTEGRITETSPOLICY</a>
                        <a href="Contact us.php">KONTAKTA OSS</a>
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