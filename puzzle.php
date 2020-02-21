<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
             
        // var score = 0;

		// function checkAnswer(inputId, answers){
		// 	var userAnswer = document.getElementById(inputId).value;
		// 	userAnswer = userAnswer.toLowerCase();
		// 	for(var i = 0; i < answers.length; i++){
		// 		if(userAnswer == answers[i]){
		// 			score++;
		// 			break;
		// 		}
		// 	}
		// }
		
		// function checkAnswers() {

		// 	checkAnswer("userAnswer1", ["троль"]);
		// 	checkAnswer("userAnswer2", ["вдох"]);
		// 	checkAnswer("userAnswer3", ["дом", "обитель", "жилище"]);
        //     checkAnswer("userAnswer4", ["сон", "сны", "сновидения"]);
		// 	alert("Вы отгадали " + score + " загадок");

		// }  
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

                <h1>Игра в загадки</h1>

                <div class="box">
                   
                <?php
                
                 if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) && isset($_GET['userAnswer4'])){

                 
                   $userAnswer = $_GET["userAnswer1"];
                   $score = 0;
                   if($userAnswer == "троль"){
                       $score++;
                   }

                   $userAnswer = $_GET["userAnswer2"];
                   if($userAnswer == "вдох"){
                       $score++;
                   }

                   $userAnswer = $_GET["userAnswer3"];
                   if($userAnswer == "дом" || $userAnswer =="обитель" || $userAnswer =="жилище"){
                       $score++;
                   }

                   $userAnswer = $_GET["userAnswer4"];
                   if($userAnswer == "сон" || $userAnswer =="сны" || $userAnswer =="сновидения"){
                       $score++;
                   }

                   echo "Вы угадали " . $score . " загадок";
                 }
                ?>

                  <form method="GET">                  
                    <p>Много ест и много пьет, ходит он большой и бьёт.</p>
                    <input type="text" name="userAnswer1">

                    <p>Пусть легким бываю я, словно перо, быть долго со мною и тролю порой нелегко</p>
                    <input type="text" name="userAnswer2">

                    <p>Не гость я здесь и не захватчик. Сему месту принадлежу я поправу.</p>
                    <input type="text" name="userAnswer3">

                    <p>Голоса призрачных царств, отзвуки еще не наступивщего... Удивительные сестры мыслей скитаются в ночи, но исчезают.</p>
                    <input type="text" name="userAnswer4">

                    <br>
                    <input type="submit" value="Ответить" name="">
                  </form>
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