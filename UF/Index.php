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
        	<!--<a href="Index.php"><img src="Images/text.png" alt="logo"></a>-->
      	</header>
        <nav>
        	<ul >
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
            			<a href="Index.php"><img src="Images/text.png" alt="logo"></a>
                </li>
                <li>
                	<div class="searching">
                       	<form action="Results.php" method="get">
                           	<input type="text" name="k" placeholder="  SÖK" value="<?php echo $_GET['k']; ?>"/>
                   			<input class="btnSearch" value="" type="submit"/>
                        </form>
                    </div>
                </li>
                <li>
                	<a href="Cart.php">KÖP</a>
                </li>
        	</ul>
        </nav>
        <article>
        	<div class="index">
            	<div class="indexcontent">
                	<p>jfoisjdfoijsdiofcjiosdjfoidsajiofjcsodijfiocjdsoifjcodisjfoicdshdsuaisuohduoiashudojoijcewoidsjfoijcdwoisfjcdowisjcoijdsoifjcwdoisjfcoijdsoficjdwoisjfoicwdesjfoic</p>
                    <div class="indexbuttons">
                        <ul>
                            <li>
                                <div class="btncontainer">
                                    <a href="#">
                                        <div class="btnTry">LÄS MER</div>
                                    </a>
                                    <div class="overlay"></div>
                                </div>
                            </li>
                            <li>
                                <div class="btncontainer">
                                    <a href="#">
                                        <div class="btnTry">LÄS M...MER</div>
                                    </a>
                                    <div class="overlay"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            	<div class="indeximges">
            		<img src="Images/indeximage.png" alt="imageindex">
                </div>
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
                        <a href="Terms_of_use.php">ANVÄNDARVILLKOR</a>
				     	<a href="Website_privacy_policy.php">INTEGRITETSPOLICY</a>
                        <a href="Contact_us.php">KONTAKTA OSS</a>
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