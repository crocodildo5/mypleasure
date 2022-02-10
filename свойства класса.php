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
/*
class shop{
    private $name;
    public function naming(){
        $this->name='Adidas';
        echo $this->name;
    }
}
$sneakers=new shop();
$sneakers->naming();
$sneakers->name="Nike";*/

class user{
    public $name="Имя";
    public $password="Пароль";
    public $mail="Почта";
    public $height="Рост";
}
$admin=new user();
$admin->name="Олег";
echo $admin->name;

$user1=new user();
$user1->name="<br>Мефодий";
$user1->surname=" Насыров";
echo $user1->name;
echo $user1->surname;

?>
</body>
</html>