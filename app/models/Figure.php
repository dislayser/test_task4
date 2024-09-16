<?php

// Интерфейс для метода нахождения площади
interface Figure
{
    public function getArea(): float;
}

// Прямоугольник
class Rectangle implements Figure
{
    public float $width;
    public float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}

// Круг
class Circle implements Figure
{
    public float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

?>