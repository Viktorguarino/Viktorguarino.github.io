<!doctype html>
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
        	<a href="Index.php"><img src="Images/text.png" alt="logo"></a>
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
					$query = "SELECT * FROM search WHERE ";
					
					foreach ($terms as $each) {
						$i++;					
						if($i == 1)
							$query.= "keywords LIKE '%$each%' ";
						else
							$query.= "OR keywords LIKE '%$each%' ";
					}
					
					// anslut
					mysql_connect("localhost", "root", "korvisinibus1");
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
					mysql_close();
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