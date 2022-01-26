<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$_SESSION["favcolor"]="darkblue";
$_SESSION["favpers"]="me";
echo $_SESSION["favcolor"];
echo $_SESSION["favpers"];
session_unset();
session_destroy()
?>
</body>
</html>
