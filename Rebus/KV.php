<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Конвертор валюты</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
    <div class="header">
        <a href="index.php">Главная</a>/
        <a href="#">Конвертер валют</a>/
        <a href="rebus.php">Загадки</a>
    </div>
    <h1>Конвертор валюты</h1>
    <div class="center">
        <img src="img/My_photo/hi.png" alt="Мои фото">
        <div class="box_text">
            <p>
                <script type="text/javascript">
                    var rub = prompt("Введите сумму в рублях");
                    var usd = 60.33; //поменял курс 07.08.17
                    var eur = 71.69;  //поменял курс 07.08.17
                    document.write(" В долларах это" +rub/usd +"\n" + "В евро это " +rub/eur);
                </script>
            </p>


        </div>
    </div>
</div>
<div class="footer">
    <?php date_default_timezone_set('Europe/Moscow');?>
    Copyright &copy Петруня,  <?php echo date('j-m-Y, H-i-s')?>
</div>
</body>
</html>