<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$to = "webcreator.help@hotmail.com";
$subject = "Nytt medelande";

mail ($to, $subject, $comments, "Från: " . $name . $lastname);
echo "<p class='echo' style='top:20%; height:20%; margin:0 auto; text-align:center; position:relative;'>Ditt medelande har skickats! <br />
	  Tack för din feedback!</p>";
?>

<p style="top:20%; margin:0 auto; text-align:center; position:relative;" >gay</p>