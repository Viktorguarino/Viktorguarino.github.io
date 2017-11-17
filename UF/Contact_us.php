<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<title>WebCreator</title>
</head>

<body>
	<div id="container">
    	<div class="wrappercontainer">
        	<div class="wrapper">
            	<div id="sidebar">
                    <div id="dismiss">
                        <div>☰</div>
                    </div>
                    <div class="sidebar-header">
                    	<a href="index.php"><img src="Images/text.png"></a>
                    </div>
                    <ul class="sidebar-list components">
                    	<p><a href="Info.php">INFO</a></p>
                        <p><a href="Mallar.php">MALLAR</a></p>
                        <p><a href="#">Dummy Heading</a></p>
                    </ul>
            	</div>
                <div class="navbar-header">
                	<button type="button" id="sidebarCollapse" class="btnNavbar">☰</button>
                </div>
        	</div>
        	<div class="overlayside"></div>
        </div> 
        <script type="text/javascript" src="script.js"></script>
        <nav>
        	<ul >
            	<li>
                    <a href="Info.php">INFO</a>
                </li>
                <li>
                	<a href="Mallar.php">MALLAR</a>
                </li>
                <li>
                    <a href="#">VIDEO</a>
                </li>
                <li class="centerimage">
            		<a href="index.php"><img src="Images/text.png" alt="logo"></a>
                </li>
                <li>
                	<div class="searching">
                       	<form action="Results.php" method="get">
                           	<input type="text" name="k" value="<?php echo $_GET['k']; ?>"/>
                   			<input class="btnSearch" value="" type="submit"/>
                        </form>
                    </div>
                </li>
        	</ul>
        </nav>
        <article>
        	<div class="contact">
            	<ol>
                	<li>
                    	<div class="cirlce"><img src="Images/Headshot/simonbild.png"></div>
                        <div class="contactinfo"> 
                            <p>Simon Måtegen</p>
                            <p><span><i>Verkställande Direktör - Webbassistent</i></span></p>
                            <br>
                            <p><span>+46 763 469 126</span></p>
                            <p><span>simon.mategen@gmail.com</span></p>
                            <p><span>webcreator.help@hotmail.com</span></p>
                        </div>
                    </li>
                    <li>
                    	<div class="cirlce"><img src="Images/Headshot/viktorbild.png"></div>
                        <div class="contactinfo"> 
                            <p>Viktor Guarino</p>
                            <p><span><i>IT-direktör - Webmaster</i></span></p>
                            <br>
                            <p><span>+46 720 133 850</span></p>
                            <p><span>guarino.viktor@hotmail.it</span></p>
                            <p><span>webcreator.help@hotmail.com</span></p>
                        </div>
                    </li>
                    <li>
                    	<div class="cirlce"><img src="Images/Headshot/jonathanbild.png"></div>
                        <div class="contactinfo"> 
                            <p>Jonathan Zander</p>
                            <p><span><i>Finansdirektör - Webbassistent</i></span></p>
                            <br>
                            <p><span>+46 724 320 071</span></p>
                            <p><span>pelle9900@hotmail.com</span></p>
                            <p><span>webcreator.help@hotmail.com</span></p>
                        </div>
                    </li>
                </ol>
            </div>
            <div id="panel">
            <?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$to = "webcreator.help@hotmail.com";
$subject = "Nytt medelande";

mail ($to, $subject, $comments, "Från: " . $name . $lastname);
?>          
            	<form method="post"> 
                    <input type="contacttext" placeholder="Namn" name="name" required pattern="[a-zA-2] {3,15}$"/>
                    <input type="contacttext" placeholder="Efternamn" name="lastname" required pattern="[a-zA-2] {3,15}$"/> 
                    <input type="contacttext" placeholder="E-mail" name="email" />
                    <textarea name="comments" placeholder="Medelande" rows="10" cols="20"></textarea>
                    <br />
                    <div>
                    	<input type="submit" name="submit" value="Skicka" />
                    </div>
                </form>
            </div>
            <div id="flip">E-maila oss</div>
            <div class="googleMap">
        		<div id="googleMap" style="height:350px; width:100%;"></div>
			</div>
        	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqF8mxr2UUJgzOXk-BSoZi0a3_EqS3gaE&callback=myMap"></script>
        </article>
        <footer>
        	<div class="footerContainer">
            	<div class="footerContent">
                    <div class="column logo">
                    	<a href="index.php"></a>
                    </div>
                    <div class="column social">
                        <a href="https://www.facebook.com/Web-Creator-1764341753865008/" target="_blank"></a>
                        <a href="https://twitter.com/WebCreator_ORG" target="_blank"></a>
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