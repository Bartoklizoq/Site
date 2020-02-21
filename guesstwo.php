<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Личный сайт студента GeekBrains</title>
    <script type="text/javascript">
    
       var answer = parseInt(Math.random() * 100);
       var playerNumber = 1;

       function readInt(){
           return document.getElementById("userAnswer").value;
       }

       function write(text){
           document.getElementById("info").innerHTML = text;
       }
       function hide(id){
          document.getElementById(id).style.display = "none";
       }

       function guess(){
        var userAnswer = readInt();
        if(userAnswer == answer){
        write("Поздравляю! Победил игрок под номером " + playerNumber + " <br>Правильный ответ: " + answer);
        hide("button");
        hide("userAnswer");
        }
        else if(userAnswer == "quit"){
        write("Правильный ответ: " + answer);
        hide("button");
        hide("userAnswer");
        } 
        else if(userAnswer > answer){
        if (playerNumber == 1) {playerNumber = 2;}
        else {playerNumber = 1;}
        write("Вы ввели слишком большое число<br> Ход игрока под № " + playerNumber + " <br>Введите число от 1 до 100." );
        }
        else if(userAnswer < answer){
        if (playerNumber == 1) {playerNumber = 2;}
        else {playerNumber = 1;}
        write("Вы ввели слишком маленькое число<br> Ход игрока под № " + playerNumber + " <br>Введите число от 1 до 100.");
         }
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

                    <h1>Угадайка с двумя игроками</h1>

                    <div class="box">
                        <p id="info">Угадайте число от 0 до 100.Для выхода введите "quit".</p>
                        <input type="text" id="userAnswer">
                        <br>
                        <a href = "#" onClick="guess();" id="button">Ввести</a>             
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