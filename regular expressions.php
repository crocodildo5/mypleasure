<?php

preg_match('@^(?:http://)?([^/]+)@i',"http://www.php.net/index.html", $matches);
$host=$matches[1];

preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "Доменное имя:{$matches[0]}\n";
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
