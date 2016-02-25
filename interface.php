<?php
header("Content-Type: text/html; charset=utf-8");

interface Figures
{
    public function show(); // метод показывает координаты фигуры

    public function area(); // считает площадь

    public function setScale(); //считает площадь фигуры
}

class Circles implements Figures
{
    function __construct($x, $y, $radius, $coefficient)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
        $this->coefficient = $coefficient;
    }
    public function show()
    {
        echo "Координаты фигуры по оси x: " . $this->x . "<br />";
        echo "Координаты фигуры по оси y: " . $this->y . "<br />";
    }

    public function area()
    {
        return pow($this->radius, 2) * pi();
    }

    public function setScale()
    {
        $this->radius = $this->radius * $this->coefficient;
    }
}
class Squared implements Figures
{
    function __construct($x, $y, $height, $width, $coefficient)
    {
        $this->height = $height;
        $this->width = $width;
        $this->coefficient = $coefficient;
        $this->x = $x;
        $this->y = $y;
    }
    public function show()
    {
        echo "Координаты фигуры по оси x: " . $this->x . "<br />";
        echo "Координаты фигуры по оси y: " . $this->y . "<br />";
    }

    public function area()
    {
        return $this->height * $this->width;
    }

    public function setScale()
    {
        $this->height = $this->height*$this->coefficient;
        $this->width = $this->width*$this->coefficient;
    }
}

class Treangles implements Figures
{
    function __construct($x, $y, $width, $height, $coefficient)
    {
        $this->width = $width;
        $this->height = $height;
        $this->coefficient = $coefficient;
        $this->x = $x;
        $this->y = $y;
    }
    public function show()
    {
        echo "Координаты фигуры по оси x: " . $this->x . "<br />";
        echo "Координаты фигуры по оси y: " . $this->y . "<br />";
    }

    public function area()
    {
        return ($this->width * $this->height) / 2;
    }

    public function setScale()
    {
        $this->width = $this->width*$this->coefficient;
        $this->height = $this->height*$this->coefficient;
    }
}

$type = $_POST['type'];
$radius = $_POST['radius'];
$x = $_POST['x'];
$y = $_POST['y'];
$height = $_POST['height'];
$width = $_POST['width'];
$coefficient = $_POST['coefficient'];


if ($type == 'square') {
    $square = new Squared($x, $y, $height, $width, $coefficient);
    if (!empty($coefficient)) {
        $square->setScale();
    }
    $square->show();
    echo "Стороны прямоугольника: " . $square->height . "/" . $square->width . " Площадь прямоугольника: " . $square->area() . "<br /><hr />";
} // В зависимости от типа выбранной фигуры
elseif ($type == 'circle') {
    $circle = new Circles($x, $y, $radius, $coefficient);
    if (!empty($coefficient)) {
        $circle->setScale();
    }
    $circle->show();
    echo "Радиус круга: " . $circle->radius . " Площадь круга: " . $circle->area() . "<br /><hr />";
} elseif ($type == 'treangle') {
    $treangle = new Treangles($x, $y, $width, $height, $coefficient);
    if (!empty($coefficient)) {
        $treangle->setScale();
    }
    $treangle->show();
    echo "Высота треугольника: " . $treangle->height . " Основание треугольника: " . $treangle->width . " Площадь прямоугольника: " . $treangle->area() . "<br /><hr />";
}
/**
 * Created by PhpStorm.
 * User: zeol
 * Date: 25.02.16
 * Time: 12:36
 */