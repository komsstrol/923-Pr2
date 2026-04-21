<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Основы программирования</h1>
    <h2>Константы</h2>
    
    <?php
        const PINK_FLOYD_ALBUM = [
            'album' => 'The Dark Side of The Moon',
            'team' => 'Pink Floyd',
            'data' => '17 марта 1973',
            'label' => 'Harvest, Capitol, EMI',
            'format' => 'LP, кассета, CD, SACD',
            'status' => 'Платиновый (USA), Платиновый (GBR)'
        ];
        
        echo "<b>Альбом:</b> " . PINK_FLOYD_ALBUM['album'] . "<br>";
        echo "<b>Группа:</b> " . PINK_FLOYD_ALBUM['team'] . "<br>";
        echo "<b>Дата выпуска:</b> " . PINK_FLOYD_ALBUM['data'] . "<br>";
        echo "<b>Лейбл:</b> " . PINK_FLOYD_ALBUM['label'] . "<br>";
        echo "<b>Формат:</b> " . PINK_FLOYD_ALBUM['format'] . "<br>";
        echo "<b>Статус:</b> " . PINK_FLOYD_ALBUM['status'] . "<br>";
    ?>

</body>
</html>