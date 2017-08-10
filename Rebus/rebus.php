<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Загадки</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function checkAnswer(id, trueAnswer)
        {
            var userAnswer = document.getElementById(id).value;
            if (userAnswer==trueAnswer)
                return true;
            else
                return false;
        }
        function checkAnswers()
        {
            var goodAnswers = 0;
            if(checkAnswer('rebus1', 'капуста')==true)goodAnswers++;
            if(checkAnswer('rebus2', 'елка'))goodAnswers++;
            if(goodAnswers==0)
                alert('Вы ничего не уадали');
            else alert('Количество правильных ответов:' + goodAnswers);
        }
    </script>

</head>
<body>


<div class="content">
    <div class="header">
        <a href="index.php">Главная</a>/
        <a href="KV.php">Конвертер валют</a>/
        <a href="#">Загадки</a>
    </div>
    <h1>Загадки</h1>
    <div class="center">
        <img src="img/My_photo/hi.png" alt="Мои фото">
        <div class="box_text">
            <p>
                Сто одежек и все без застежек
                <input type="text" id="rebus1"/>
            </p>
            <br />
            <p>
                Зимой и летом одним цветом
                <input type="text" id="rebus2"/>
            </p>
            <br />
            <form>
                <p>
                    <input type="button" value="Ответить" onClick="checkAnswers()"/>
                </p>
            </form>
        </div>
    </div>
</div>
<div class="footer">
    <?php date_default_timezone_set('Europe/Moscow');?>
    Copyright &copy Петруня,  <?php echo date('j-m-Y, H-i-s')?>
</div>

</body>
</html>