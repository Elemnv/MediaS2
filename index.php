<?php

$arrBooks = array(
    "Война и Мир" => 1,
    "Выгорание" => 2,
    "Угрюм-Река" => 3 ,
    "Мертвые души" => 4,
    "Лолита" => 5,
    "Снежная королева" => 6,
    "Колобок" => 7,
    "Быстрый английский" => 8,
    "Отчий дом" =>9,
    "Евгений Онегин" => 10

);

$arrTrees = array(
    "Ясень" => 1,
    "Акация" => 2,
    "Береза" => 3 ,
    "Яблоня" => 4,
    "Липа" => 5,
    "Ива" => 6,
    "Дуб" => 7,
    "Пихта" => 8,
    "Сосна" =>9,
    "Ель" => 10

);


function createList ($arr) {
    foreach ($arr as $key => $value){
        echo '<li class="list_item">'.$key . ':'.$value.'<li>';
    }
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="flex-block">
    <ul class="listBooks">
        <?php createList($arrBooks); ?>
    </ul>

    <ul class="listTrees">
        <?php
        createList($arrTrees);?>
    </ul>

</div>


</body>
</html>