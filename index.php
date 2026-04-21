<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Основы программирования</h1>
    <h2>Переменные</h2>
    <hr>

    <?php
        // КУРС ВАЛЮТ
        $usd_to_rub = 75.87;    // 1 доллар = 75.87 рублей
        $rub_to_cny = 0.09;      // 1 рубль = 0.09 юаня
        
        // ИСХОДНАЯ СУММА
        $usd = 1000;             // 1000 долларов
        
        // РАСЧЕТ
        $rub = $usd * $usd_to_rub;           // доллары → рубли
        $cny = $rub * $rub_to_cny;           // рубли → юани
        
        // ВЫВОД
        echo "1000 долларов = " . $rub . " рублей<br>";
        echo $rub . " рублей = " . $cny . " юаней<br>";
        echo "<b>Итого: 1000 USD = " . $cny . " CNY</b>";
    ?>
    
</body>
</html>