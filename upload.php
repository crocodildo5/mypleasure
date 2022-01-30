<?php
if(isset($_FILES['image'])){
    $errors=array();
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $zhopa=explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($zhopa));

    $expensions=array("jpeg","jpg","png");

    if($file_size> 2097152){
        $errors[]='Файл должен быть 2 мб';
    }

    if(empty($errors) == true){
        move_uploaded_file($file_tmp, "images/", $file_name);
        echo"Успешно";
    }else{
        print $errors;
    }
}
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

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">

    <ul>
        <li>sent file:<?php echo $_FILES['image']['name'];?></li>
        <li>file size:<?php echo $_FILES['image']['size'];?></li>
        <li>file type:<?php echo $_FILES['image']['type']?></li>
    </ul>
</form>
</body>
</html>
