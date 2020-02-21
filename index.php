<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Личный сайт студента GeekBrains</title>
</head>
<body>

<div class="content">
<?php
     include "menu.php";
?>
    
    
    <h1>Личный сайт студента GeekBrains</h1>
    
    <div class="center">
    <img src="img/sanya.png" width="275" height="300">
        <div class="box_text">
            <p><b>Добрый день</b>. Меня зовут <i>Александр Суханов</i>. 
                Я совсем недавно начал программировать, однако
                уже написал свой перый сайт.
            </p> 
  
            <p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

            <p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: 
                <a href="#">Главная</a>
                <a href="#">Загадки</a>
                <a href="#">Угадайка</a>
                <a href="#">Угадайка мультиплеер</a>
                <a href="#">Генератор паролей</a>
            </p>
        </div>
    </div>
</div>    
<?php
     include "footer.php";
?>
    
</body>
</html>