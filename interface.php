<?php
header("Content-Type: text/html; charset=utf-8");

interface Figures
{
    public function show(); // показывает координаты фигуры

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

    }

    public function area()
    {

    }

    public function setScale()
    {

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

    }

    public function area()
    {

    }

    public function setScale()
    {

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

    }

    public function area()
    {

    }

    public function setScale()
    {

    }
}
/**
 * Created by PhpStorm.
 * User: zeol
 * Date: 25.02.16
 * Time: 12:36
 */