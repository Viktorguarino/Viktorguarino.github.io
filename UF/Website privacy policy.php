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
        	<div class="policy">
            	<h1>Privacy Policy</h1>						
					<h2>What personal information do we collect from the people that visit our blog, website or app?</h2>
						<h3>When ordering or registering on our site, as appropriate, you may be asked to enter your or other details to help you with your experience.</h3>
					<h2>When do we collect information?</h2>
						<h3>We collect information from you when you place an order or enter information on our site. Provide us with feedback on our products or services.</h3>
					<h2>How do we use your information?</h2>
						<h3>We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:
      						<ol>	
                            	<li>To quickly process your transactions.</li>
                            </ol>                          
                        </h3>
					<h2>How do we protect your information?</h2>
						<h3>Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible. We do use Malware Scanning. We do not use an SSL certificate.
                        	<ol>
      							<li>We only provide articles and information. We never ask for personal or private information like names, email addresses, or credit card numbers.</li>
                            </ol>
						</h3>
					<h2>Do we use 'cookies'?</h2>
						<h3>We do not use cookies for tracking purposes. You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser settings. Since browser is a little different, look at your browser's Help Menu to learn the correct way to modify your cookies. If you turn cookies off, some of the features that make your site experience more efficient may not function properly.that make your site experience more efficient and may not function properly.</h3>
					<h2>Third-party disclosure</h2>
						<h3>We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information.</h3>
					<h2>Third-party links</h2>
						<h3>We do not include or offer third-party products or services on our website.</h3>
					<h2>Google</h2>
						<h3>Google's advertising requirements can be summed up by Google's Advertising Principles. They are put in place to provide a positive experience for users. <a href="https://support.google.com/adwordspolicy/answer/1316548?hl=en">https://support.google.com/adwordspolicy/answer/1316548?hl=en</a>. We have not enabled Google AdSense on our site but we may do so in the future.</h3>
					<h2>We agree to the following:</h2>
                        <h3>Users can visit our site anonymously. Once this privacy policy is created, we will add a link to it on our home page or as a minimum, on the first significant page after entering our website. Our Privacy Policy link includes the word 'Privacy' and can easily be found on the page specified above.                      
                        You will be notified of any Privacy Policy changes:
                        	<ol>
                            	<li>On our Privacy Policy Page</li>
                        	</ol>
						</h3>
					<h2>How does our site handle Do Not Track signals?</h2>
						<h3>We honor Do Not Track signals and Do Not Track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.</h3>
					<h2>Does our site allow third-party behavioral tracking?</h2>
						<h3>It's also important to note that we do not allow third-party behavioral tracking.</h3>
					<h2>Children Online Privacy Protection</h2>
						<h3>We do not specifically market to children under the age of 13 years old.</h3>
					<h2>Fair Information Practices</h2>
						<h3>The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.</h3>
					<h2>In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:</h2>
						<h3>We will notify you via email
                        	<ol>
      							<li>Within 1 business day</li>
                            </ol>
						We also agree to the Individual Redress Principle which requires that individuals have the right to legally pursue enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.</h3>
					<h2>If at any time you would like to unsubscribe from receiving future emails, you can email us at and we will promptly remove you from ALL correspondence.</h2>
						<h3>Last Edited on 2017-09-27</h3>
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