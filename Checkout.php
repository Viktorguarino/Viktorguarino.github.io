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
        	<div class="checkout">
             <h2>Payment Form</h2>
                <form id="buy-form" method="post" action="javascript:">
                     
                    <p class="form-label">First Name:</p>
                    <input class="text" id="first-name" spellcheck="false"></input>
                     
                    <p class="form-label">Last Name:</p>
                    <input class="text" id="last-name" spellcheck="false"></input>
                     
                    <p class="form-label">Email Address:</p>
                    <input class="text" id="email" spellcheck="false"></input>
                     
                    <p class="form-label">Credit Card Number:</p>
                    <input class="text" id="card-number" autocomplete="off"></input>
                     
                    <p class="form-label">Expiration Date:</p>
                    <select id="expiration-month">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                    </select>
                     
                    <select id="expiration-year">
                        <?php 
                            $yearRange = 20;
                            $thisYear = date('Y');
                            $startYear = ($thisYear + $yearRange);
                         
                            foreach (range($thisYear, $startYear) as $year) 
                            {
                                if ( $year == $thisYear) {
                                    print '<option value="'.$year.'" selected="selected">' . $year . '</option>';
                                } else {
                                    print '<option value="'.$year.'">' . $year . '</option>';
                                }
                            }
                        ?>
                    </select>
                     
                    <p class="form-label">CVC:</p>
                    <input class="text" id="card-security-code" autocomplete="off"></input>
                     
                    <input id="buy-submit-button" type="submit" value="Place This Order »"></input>
                </form>
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