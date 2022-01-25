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
<h1>Мэйби бейби</h1>
<?php

/*базовый ассоциативный массив
$name["Мега"]="Зайка";
$name["Супер"]="Пуся";
$name["Absolutely"]="Милаш";
$name["Очень"]="Кьют";
    echo $name["Очень"];*/

/*ассоциативный массив как константа и вывод необходимой характеристики
define('massiv',
["Кулебякова"=>["name"=>"Кулебяка","date"=>"01-01-0001"]]
);
echo massiv["Кулебякова"]["date"];*/

/*слияние массивов и их вывод
$first=["первый","второй"];
$second=["третий","четвёртый"];
$all=array_merge_recursive($first,$second);
print_r($all);*/

/*массив и его вывод через foreach
$birth=[
    "Олег"=>"01-02-0003",
    "Игорь"=>"04-05-0006"
];
foreach($birth as $k=>$v)
    echo"$k родился $v <br />";*/
?>
</body>
</html>
