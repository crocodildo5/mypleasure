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
<?php
//присваиваем переменной значение текста в файле, открываем его, выводим и закрываем, чтобы не засорять память
$lorem=fopen("somebody.txt", "r") or die("Миссия провалена, босс");
//echo fread($lorem, filesize("somebody.txt"));
//fclose("somebody.txt");

//выводит текстовый документ с определённым объёмом памяти
//echo fgets($lorem,512);

//выводим каждый элемент документа, пока не достигнем конца
/*while(!feof($lorem)){
    echo fgets($lorem, 200);
}*/

//автоматическое создание текстового файла и запись в него строки
/*$dora=fopen("dura.txt","w");
$txt="барбисайз гёрл детка влезет в твой карман";
fwrite($dora,$txt);
fclose("dura.txt")*/
?>
</body>
</html>