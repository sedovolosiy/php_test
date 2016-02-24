<?php
header("Content-Type: text/html; charset=utf-8");
abstract class Figure {
    public $x = 0;
    public $y = 0;

    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;

    }

    abstract function Show();

    abstract function Area();

    abstract function Scale();

    function Move($x, $y){
        $this->x = $x;
        $this->y = $y;


    }
}
class Circle extends Figure {
//    public $radius = 0;


    function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;
    }

    function Show(){
        echo "Координаты фигуры по оси x: ".$this->x."<br />";
        echo "Координаты фигуры по оси y: ".$this->y."<br />";

    }


    function Area(){

        return pow($this->radius,2)*pi();

    }

    function Scale(){

    }

}

class Sqaure extends Figure {

    public $height = 0;
    public $width = 0;

    function __construct($x, $y, $height, $width)
    {
        parent::__construct($x, $y);
        $this->height = $height;
        $this->width = $width;
    }

    function Show(){
        echo "Координаты фигуры по оси x: ".$this->x."<br />";
        echo "Координаты фигуры по оси y: ".$this->y."<br />";

    }

    function Area(){
        return $this->height*$this->width;

    }

    function Scale(){

    }

}

class Treangle extends Figure {

//    public $a;

    function __construct($x, $y, $a, $h)
    {
        parent::__construct($x, $y);
        $this->a = $a;
        $this->h = $h;

    }

    function Show(){
        echo "Координаты фигуры по оси x: ".$this->x."<br />";
        echo "Координаты фигуры по оси y: ".$this->y."<br />";

    }

    function Area(){
//        $p = ($this->a+$this->b+$this->c)/2;
//        return sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
        return ($this->a*$this->h)/2;

    }

    function Scale(){

    }

}

$circle = new Circle(10,15,50);
$circle->Show();
echo "Радиус круга: ". $circle->radius." Площадь круга: ".$circle->Area()."<br /><hr />";



$square = new Sqaure(49,65,50,50);
$square->Show();
echo "Стороны прямоугольника: ".$square->height."/".$square->width." Площадь прямоугольника: ".$square->Area()."<br /><hr />";

$treangle = new Treangle(25,25,10,50);
$treangle->Show();
echo "Высота треугольника: ".$treangle->h." Основание треугольника: ".$treangle->a." Площадь прямоугольника: ".$treangle->Area()."<br /><hr />";
/*echo $circle->;
/*echo "Hello, circle";
/**
 * Created by PhpStorm.
 * User: zeol
 * Date: 24.02.16
 * Time: 10:50
 */