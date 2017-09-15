<?php


/* Email Variables */
$emailSubject = 'Burnas Beach contact'; /*Make sure this matches the name of your file*/
$webMaster = 'reservations@burnas-beach-resort.com'; 'sam@bur-nas-beach.com' ;



/* Data Variables */
$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$surname = $_POST['contact numb'];
$comments = $_POST['comments'];



$body = <<<EOD
<br><hr><br>
Name: $name <br>
Surname: $surname <br>
Email: $email <br>
Comments: $comments <br>
EOD;
$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/* Results rendered as HTML */
$theResults = <<<EOD
<html>
<head>
<title>sent message</title>
<meta http-equiv="refresh" content="5;URL=http://www.bur-nas-beach.com">
<style type="text/css">
<!--

-->
</style>
</head>
<div align="center"><p>Thank you, your message has been successfully sent. We will revert to you as soon as possible.</p><br><p> Merci, votre message a été expedié avec succés. Nous vous repondrons sous peut.</p><br><p>Спасибо,ваше сообшение посланно,ждите пожалуйсто ответта.</p></div>
</div><
</body>
</html>
EOD;
echo "$theResults";
?>