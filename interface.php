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