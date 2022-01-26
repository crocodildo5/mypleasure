<?php
/*счётчик посещения страницы
$counter=isset($_COOKIE['counter']) ? $_COOKIE['counter'] :0;
$counter++;
setcookie("counter",$counter);
echo $counter;*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

/*вывод имени и значения куки если куки установлены
if(isset($_COOKIE[$cookie_name])){
    echo"cookie named $cookie_name";
    echo "cookie value $cookie_value";
}*/

/*показывает и выводит установлены ли куки
if(count($_COOKIE)>0){
    echo"куки активны";
}
else{
    echo"куки пассивны";
}*/
?>
</body>
</html>