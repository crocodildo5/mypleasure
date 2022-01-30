<?php
//mail("example@gmail.com","subject", "line1\n line2\n line3\n")

$to="example@gmail.com";
$subject="Заголовок письма";
$message='<p> Text</p> </br> <p>ещё текст</p>';

$headers="Content-type: text/html; charset= windows-1251 \r\n";
$headers .="From:exampleour@gmail.com";
$headers .="Reply to exampleour@gmail.com";

mail($to, $subject, $message, $headers);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


</body>
</html>