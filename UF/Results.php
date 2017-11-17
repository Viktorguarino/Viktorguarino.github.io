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
        	<div class="searchingTwo">
            	<form action="Results.php" method="get">
                	<input type="textTwo" name="k" id="searchTwo" placeholder="SÖK" value="<?php echo $_GET['k']; ?>"/>
                    <input class="btnSearchTwo" value="" type="submit"/>
                </form>
                <?php 
					$k = $_GET['k'];
					$terms = explode(" ", $k);
					$query = "SELECT * FROM search WHERE ";
					
					foreach ($terms as $each) {
						$i++;					
						if($i == 1)
							$query.= "keywords LIKE '%$each%' ";
						else
							$query.= "OR keywords LIKE '%$each%' ";
					}
					$button = $_GET ['submit'];
            		$search = $_GET ['search']; 

					if(!$button)
					echo "<p>Sorry but we can't find any results if you do not      submit a keyword</p>";
					else
					{
					if(strlen($search)<=1)
					echo "<p>Sorry but the search term you provided is too short for     us to find any items related.</p> ";
					else{
					echo "<p>You searched for <b>$search</b> <hr size='1'></br></p><p>If your site hasn't shown up just visit the Members area and submit it!</p>";
					mysql_connect("localhost","username","password");
					mysql_select_db("database");

					$search_exploded = explode (" ", $search);

					foreach($search_exploded as $search_each)
					{
					$x++;
					if($x==1)
					$construct .="keywords LIKE '%$search_each%'";
					else
					$construct .="AND keywords LIKE '%$search_each%'";

					}

					$construct ="SELECT * FROM searchengine WHERE $construct";
					$run = mysql_query($construct);

					$foundnum = mysql_num_rows($run);

					if ($foundnum==0)
					echo "<p>Sorry, there are no matching results for     <b>$search</b>.</br></br>1. 
					Try more general words. for example: If you want to search 'how     to create a website'
					then use general keyword like 'create' 'website'</br>2. Try different words with similar
					 meaning</br>3. Please check your spelling.</br>4. If you have any ideas on sites you want to show up submit it to our database.</p>";
					else
					{
					echo "<p>We found $foundnum results!</p>";

					while($runrows = mysql_fetch_assoc($run))
					{
					$title = $runrows ['title'];
					$desc = $runrows ['description'];
					$url = $runrows ['url'];

					echo "
					<p><a href='$url'><b>$title</b></a><br>
					$desc<br>
					<a href='$url'>$url</a></p>

					";

					}
					}

					}
					}
					
					// anslut
					/*mysql_connect("localhost", "root", "korvisinibus1", "test");
					mysql_select_db("webcreatoruf");
					
					$query = mysql_query($query);
					$numrows = mysql_num_rows($query);
					if($numrows > 0) {
						
						while ($row = mysql_fetch_assoc($query)){
							$id = $row['id'];
							$title = $row['title'];
							$description = $row['description'];
							$keywords = $row['keywords'];
							$link = $row['link'];
							
							echo "<h2><a href='$link'>$title</a></h2>
							$description<br /><br />";
						}	
					}
					else
						echo "Inga träffar hittades för \"<b>$k</b>\"";
					// koppla ifrån
					mysql_close();*/
				?>
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