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
        	<div class="searchingTwo">
            	<form action="Results.php" method="get">
                	<input type="textTwo" name="k" id="searchTwo" placeholder="SÖK" value="<?php echo $_GET['k']; ?>"/>
                    <input class="btnSearchTwo" value="" type="submit"/>
                </form>
                <hr>
                <?php 
					$k = $_GET['k'];
					
					$terms = explode(" ", $k);
					
					foreach ($terms as $each) {
						$i++;
						
						
					}
				?>
            </div>
        </article>
        <footer>
        	<div class="footerContainer">
            	<div class="footerContent">
                    <div class="column logo">
                    	<a href="Index.php"></a>
                    </div>
                    <div class="column social">
                        <a href="https://www.facebook.com/Web-Creator-1764341753865008/"></a>
                        <a href="https://www.instagram.com/webcreatorofficial/"></a>
                    </div>
                    <div class="column info">
                        <a href="Terms of use.php">VILLKOR</a>
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