<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Личный сайт студента GeekBrains</title>
    <script type="text/javascript">

       var letters = ["A", "a", "B", "b", "C", "c", "D", "d", "E", "e", "F", "f", "G", "g", "H", "h", "I", "i", "J", "j", "K", "k", "L", "l", "M", "m", "N", "n", "O", "o", "P", "Q", "q", "R", "r", "S", "s", "T", "t", "U", "u", "V", "v", "W", "w", "X", "x", "Y", "y", "Z", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9","0",];

       function readInt(){
           return +document.getElementById("userAnswer").value;
       }

       function write(text){
           document.getElementById("info").innerHTML = text;
       }

       function getRandomCode(max){
           return Math.round(Math.random() * max);
       }

       function generateCode(letters, length){
           var code = "";
           for(var i = 0; i < length; i++){
               var n = getRandomCode(letters.length - 1);
               code = code + letters[n];
           }
           return code;
       }

       function generate(){
           var length = readInt();
           var password = generateCode(letters, length);
           write(password);
       }
    </script>
</head>
<body>

    <div class="content">

    <?php
     include "menu.php";
    ?>
    
        <div class="contentWrap">
            <div class="content">
                <div class="center">

                    <h1>Генератор паролей JS</h1>

                    <div class="box">
                      <p id="info">Задайте длинну пароля.</p>
                      <input type="text" id="userAnswer">
                      <br>
                      <a href="#" onClick="generate();">Создать</a>                   
                    </div>

                </div>
            </div>
        </div>
               
    </div>
    <?php
     include "footer.php";
    ?>
</body>
</html>