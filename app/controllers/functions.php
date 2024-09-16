<?php
// Для генерации фигур
function gen_Figures(int $count): array
{
    $shapes = [];
    for ($i = 0; $i < $count; $i++) {
        $shapeType = rand(0, 1);
        if ($shapeType === 0) {
            // Генерация прямоугольника
            $width = rand(1, 10);
            $height = rand(1, 10);
            $shapes[] = new Rectangle($width, $height);
        } else {
            // Генерация круга
            $radius = rand(1, 5);
            $shapes[] = new Circle($radius);
        }
    }
    return $shapes;
}

// Для сортировки по площади
function sortByArea(array $shapes): array
{
    usort($shapes, function (Figure $a, Figure $b) {
        return $a->getArea() <=> $b->getArea();
    });
    return $shapes;
}
?>