<?php
$to = "jose_gl@tesch.edu.mx";
$subject = "Asunto del email";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Esto es un H1</h1>
<p>Esto es un párrafo en HTML</p>
</body>
</html>";
 
mail($to, $subject, $message, $headers);
var_dump(mail($to, $subject, $message, $headers));

?>