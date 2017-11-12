<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$to = "webcreator.help@hotmail.com";
$subject = "Nytt medelande";

mail ($to, $subject, $comments, "Från: " . $name . $lastname);
echo "Ditt medelane har skickats";
?>