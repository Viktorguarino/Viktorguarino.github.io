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
                    	<p><a href="index.php">INFO</a></p>
                        <p><a href="Mallar.php">MALLAR</a></p>
                        <p><a href="Info.php">Dummy Heading</a></p>
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
                    <a href="index.php">INFO</a>
                </li>
                <li>
                	<a href="Mallar.php">MALLAR</a>
                </li>
                <li>
                    <a href="Info.php">VIDEO</a>
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
        	<div class="templates">
				<div class="temps">
					<div class="innertemps">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<div class="tempcontainer tempcontainer1">
							<div class="btncontainer">
							<a href="Info.php">
								<div class="btnTry btnTry1">DEMO</div>
							</a>
							</div>
                            <div class="containertext">
								<h2>EXEMPEL</h2>
								<p>alldhsaidiuasdsauiduiah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbar</p>
                            </div>
						</div>
					</div>
					<div class="innertemps">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<div class="tempcontainer tempcontainer2">
							<div class="btncontainer">
							<a href="Info.php">
								<div class="btnTry btnTry2">DEMO</div>
							</a>
							</div>
							<div class="containertext">
								<h2>EXEMPEL</h2>
								<p>alldhsaidiuasdsauiduiah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbar</p>
                            </div>
						</div>
					</div>
				</div>
				<div class="temps">
					<div class="innertemps">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<div class="tempcontainer tempcontainer3">
							<div class="btncontainer">
							<a href="Info.php">
								<div class="btnTry btnTry3">DEMO</div>
							</a>
							</div>
							<div class="containertext">
								<h2>EXEMPEL</h2>
								<p>alldhsaidiuasdsauiduiah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbar</p>
                            </div>
						</div>
					</div>
					<div class="innertemps">
						<div class="circles">
							<div class="circle"></div>
							<div class="circle"></div>
							<div class="circle"></div>
						</div>
						<div class="tempcontainer tempcontainer4">
							<div class="btncontainer">
							<a href="Info.php">
								<div class="btnTry btnTry4">DEMO</div>
							</a>
							</div>
							<div class="containertext">
								<h2>EXEMPEL</h2>
								<p>alldhsaidiuasdsauiduiah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbarallah auhakbar</p>
                            </div>
						</div>
					</div>
				</div>
			</div>
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