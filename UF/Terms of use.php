<!DOCTYPE html>
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
        	<div class="terms">
                <h1>Terms and conditions</h1>
                    <h2>Introduction</h2>
                        <h3>These Website Standard Terms and Conditions written on this webpage shall manage your use of this website. These Terms will be applied fully and affect to your use of this Website. 
                        By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</h3>
                    <h2>Intellectual Property Rights</h2>
                        <h3>Other than the content you own, under these Terms, Web-Creator and/or its licensors own all the intellectual property rights and materials contained in this Website.
                        You are granted limited license only for purposes of viewing the material contained on this Website.</h3>
                    <h2>Restrictions</h2>
                        <h3>You are specifically restricted from all of the following:
                            <ol>
                                <li>publishing any material from this Website in any other media;</li>
                                <li>selling, sublicensing and/or otherwise commercializing any material from Web-Creator;</li>
                                <li>publicly performing and/or showing any material from Web-Creator;</li>
                                <li>using this Website in any way that is or may be damaging to this Website;</li>
                                <li>using this Website in any way that impacts user access to this Website;</li>
                                <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
                                <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>
                            </ol>
                        Certain areas of this Website are restricted from being access by you and Web-Creator may further restrict access by you to any areas of this Website, at any time, in absolute discretion.</h3>
                    <h2>Your Content</h2>
                        <h3>In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Web-Creator a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.
                        Your Content must be your own and must not be invading any third-party’s rights. Web-Creator reserves the right to remove any of Your Content from this Website at any time without notice.</h3>
                    <h2>No warranties</h2>
                        <h3>This Website is provided “as is,” with all faults, and Web-Creator express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</h3>
                    <h2>Limitation of liability
                        <h3>In no event shall Web-Creator, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Web-Creator, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</h3>
                    <h2>Indemnification</h2>
                        <h3>You hereby indemnify to the fullest extent Web-Creator from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</h3>
                    <h2>Severability</h2>
                        <h3>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</h3>
                    <h2>Variation of Terms</h2>
                        <h3>Web-Creator is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</h3>
                    <h2>Assignment</h2>
                        <h3>The Web-Creator is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</h3>
                    <h2>Entire Agreement</h2>
                        <h3>These Terms constitute the entire agreement between Web-Creator and you in relation to your use of this Website, and supersede all prior agreements and understandings.</h3>
                    <h2>Governing Law & Jurisdiction</h2>
                        <h3>These Terms will be governed by and interpreted in accordance with the laws of the State of Skåne, and you submit to the non-exclusive jurisdiction of the state and federal courts located in Skåne for the resolution of any disputes.</h3>
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