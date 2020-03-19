<?php

$title   = 'Тестовое задание №3';
$content = 'Это параграф с содержимым переменной $content';
$red     = true;

$bestMovies = [
    [
        "movie" => "Побег из Шоушенка",
        "year"  => 1994,
    ],
    [
        "movie" => "Зеленая миля",
        "year"  => 1999,
    ],
    [
        "movie" => "Форрест Гамп",
        "year"  => 1994,
    ],
    [
        "movie" => "Список Шиндлера",
        "year"  => 1993,
    ],
    [
        "movie" => "1+1",
        "year"  => 2011,
    ],
];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title;?></title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
<?php if ($red): ?>
    <h1 class="red">Заголовок красного цвета</h1>
<?php else: ?>
    <h1>Заголовок</h1>
<?php endif;?>
    <p><?=$content;?></p>
    <ul>
    <?php for ($i = 0; $i < count($bestMovies); $i++): ?>
        <li><b><?=$bestMovies[$i]['movie'];?></b> - (<?=$bestMovies[$i]['year'];?>)</li>
    <?php endfor;?>
    </ul>
</body>
</html>
