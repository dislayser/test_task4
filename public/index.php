<?php
if (file_exists(__DIR__ . '/../app/controllers/main.php')){
    require(__DIR__ . '/../app/controllers/main.php');
}

$shapes = gen_Figures(10);
$sortedFigures = sortByArea($shapes);

// Вывод результата
echo "<h2>Сгенерированные фигуры отсортированные по площади:</h2>";
echo "<ul>";
foreach ($sortedFigures as $shape) {
    if ($shape instanceof Rectangle) {
        echo "<li>Прямоугольник: Ширина = {$shape->width}, Высота = {$shape->height}, S = {$shape->getArea()}</li>";
    } elseif ($shape instanceof Circle) {
        echo "<li>Круг: Радиус = {$shape->radius}, S = {$shape->getArea()}</li>";
    }
}
echo "</ul>";
