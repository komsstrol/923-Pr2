<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Основы программирования</h1>
    <h2>Типы данных</h2>
    <hr>
    <h2>Слабая типизация</h2>
    
    <?php
        $VarStr = 'Слабая типизация PHP';
        
        const CONSTSTR = 'Слабая типизация PHP';
        
        define("ARRSTR", array('Слабая типизация PHP'));
        
        echo "<b>Переменная \$VarStr:</b><br>";
        var_dump($VarStr);
        echo "<br><br>";
        
        echo "<b>Константа CONSTSTR:</b><br>";
        var_dump(CONSTSTR);
        echo "<br><br>";
        
        echo "<b>Массив ARRSTR:</b><br>";
        var_dump(ARRSTR);
        echo "<br><br>";
        
        echo "<hr>";
        echo "<p><b>Вывод:</b> Тип данных зависит от способа представления данных в программе.</p>";
        echo "<p>Значение 'Слабая типизация PHP' может быть: </p>";
        echo "<ul>";
        echo "<li>строкой (в переменной и константе)</li>";
        echo "<li>массивом (в константе-массиве)</li>";
        echo "</ul>";
        echo "<p>var_dump() подтверждает разные типы для разных способов представления.</p>";
    ?>
    
</body>
</html>