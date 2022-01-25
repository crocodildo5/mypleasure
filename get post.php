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

<form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
    <fieldset>
        <legend>Выберите куда сесть</legend>
        <label for="стул">
        <input type="checkbox" id="chair" name="place[]" value="стул">
            Стул
        </label>
        <label for="пол">
            <input type="checkbox" id="floor" name="place[]" value="пол">
            Пол
        </label>
        <label for="моё лицо">
            <input type="checkbox" id="my face" name="place[]" value="моё лицо">
            Моё лицо
        </label>
        <label for="кресло">
            <input type="checkbox" id="armchair" name="place[]" value="кресло">
            Кресло
        </label>
    </fieldset>
    <input type="submit">
</form>
<?php
$place=isset($_POST['place']) ?$_POST['place']:'';
if (!empty($place)){
    echo'<br><br> Вы можете сесть на ';
    foreach($place as $a){
        echo "<span style=\"color:darkblue\">".htmlentities($a)."</span>";
    }
}
?>
</body>
</html>