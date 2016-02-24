<?php
header("Content-Type: text/html; charset=utf-8");

abstract class Figure
{
    public $x = 0;
    public $y = 0;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

    }

    abstract function Show();

    abstract function Area();

    abstract function setScale();

    function Move($x, $y)
    {
        $this->x = $x;
        $this->y = $y;


    }
}

class Circle extends Figure
{
//    public $radius = 0;


    function __construct($x, $y, $radius, $coefficient)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;
        $this->coefficient = $coefficient;
    }

    function Show()
    {
        echo "Координаты фигуры по оси x: " . $this->x . "<br />";
        echo "Координаты фигуры по оси y: " . $this->y . "<br />";

    }

    public function setScale()
    {
        $this->radius = $this->radius * $this->coefficient;
    }

    function Area()
    {

        return pow($this->radius, 2) * pi();

    }

}

class Sqaure extends Figure
{

    public $height = 0;
    public $width = 0;

    function __construct($x, $y, $height, $width)
    {
        parent::__construct($x, $y);
        $this->height = $height;
        $this->width = $width;
    }

    function Show()
    {
        echo "Координаты фигуры по оси x: " . $this->x . "<br />";
        echo "Координаты фигуры по оси y: " . $this->y . "<br />";

    }

    function Area()
    {
        return $this->height * $this->width;

    }

    function setScale()
    {
        $this->height*$this->width;

    }

}

class Treangle extends Figure
{

//    public $a;

    function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;

    }

    function Show()
    {
        echo "Координаты фигуры по оси x: " . $this->x . "<br />";
        echo "Координаты фигуры по оси y: " . $this->y . "<br />";

    }

    function Area()
    {
//        $p = ($this->a+$this->b+$this->c)/2;
//        return sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
        return ($this->width * $this->height) / 2;

    }

    function setScale()
    {

    }

}

//$circle = new Circle(10,15,50);
//$circle->Show();
//echo "Радиус круга: ". $circle->radius." Площадь круга: ".$circle->Area()."<br /><hr />";
//
//
//
//$square = new Sqaure(49,65,50,50);
//$square->Show();
//echo "Стороны прямоугольника: ".$square->height."/".$square->width." Площадь прямоугольника: ".$square->Area()."<br /><hr />";
//
//$treangle = new Treangle(25,25,10,50);
//$treangle->Show();
//echo "Высота треугольника: ".$treangle->h." Основание треугольника: ".$treangle->a." Площадь прямоугольника: ".$treangle->Area()."<br /><hr />";
/*echo $circle->;
/*echo "Hello, circle";
/**
 * Created by PhpStorm.
 * User: zeol
 * Date: 24.02.16
 * Time: 10:50
 */
/*
 ** Записываем переданные параметры в переменные
 */
$type = $_POST['type'];
$radius = $_POST['radius'];
$x = $_POST['x'];
$y = $_POST['y'];
$height = $_POST['height'];
$width = $_POST['width'];
$coefficient = $_POST['coefficient'];


if ($type == 'square') {
    $square = new Sqaure($x, $y, $height, $width);
    $square->Show();
    echo "Стороны прямоугольника: " . $square->height . "/" . $square->width . " Площадь прямоугольника: " . $square->Area() . "<br /><hr />";
} // В зависимости от типа выбранной фигуры
elseif ($type == 'circle') {
    $circle = new Circle($x, $y, $radius, $coefficient);
    if (!empty($coefficient)) {
        $circle->setScale();
    }
    $circle->Show();
    echo "Радиус круга: " . $circle->radius . " Площадь круга: " . $circle->Area() . "<br /><hr />";
} elseif ($type == 'treangle') {
    $treangle = new Treangle($x, $y, $width, $height);
    $treangle->Show();
    echo "Высота треугольника: " . $treangle->height . " Основание треугольника: " . $treangle->width . " Площадь прямоугольника: " . $treangle->Area() . "<br /><hr />";
}// создаём тот или иной объект

?>