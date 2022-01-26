<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

/*Вывод даты и времени по московскому времени
date_default_timezone_set("Europe/Moscow");
echo date(" jS \of F Y h:i:s A");*/

/*Вывод сегодняшней даты и даты через неделю
$nextWeek=time()+(7*24*60*60);
echo 'Now'.date('Y-m-d')."<br>";
echo'In a week'.date('Y-m-d',$nextWeek);*/

/*Вывод даты 2 месяца назад
$time=strtotime("-2 month");
$past=date('Y-m-d',$time);
echo $past;*/
?>

</body>
</html>