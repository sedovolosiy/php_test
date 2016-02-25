<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="?circle=1" method="post">
<!--    <name="type"><value="circle">-->
    Тип фигуры: <select name="type"><option value="circle">Круг</option></select>
    <input type="text" name="radius" step="1" placeholder="Введите радиус круга">
    <input type="text" name="x" step="1"  placeholder="Введите координату 'X' фигуры">
    <input type="text" name="y" step="1" placeholder="Введите координату 'Y' фигуры">
    <input type="number" name="coefficient" step="1" placeholder="Введите коэффициент">
    <input type="submit" value="Результат"><hr />
</form>
<form action="?square=1" method="post">
    Тип фигуры: <select name="type"><option value="square">Прятоугольник</option></select>
    <input type="text" name="height" step="1" placeholder="Введите высоту прямоугольника">
    <input type="text" name="width" step="1" placeholder="Введите ширину прямоугольника">
    <input type="text" name="x" step="1" placeholder="Введите координату 'X' фигуры">
    <input type="text" name="y" step="1" placeholder="Введите координату 'Y' фигуры">
    <input type="number" name="coefficient" step="1" placeholder="Введите коэффициент">
    <input type="submit" value="Результат"><hr />
</form>
<form action="?treangle=1" method="post">
    Тип фигуры: <select name="type"><option value="treangle">Треугольник</option></select>
    <input type="text" name="height" step="1" placeholder="Введите высоту треугольника">
    <input type="text" name="width" step="1" placeholder="Введите основание треугольника">
    <input type="text" name="x" step="1" placeholder="Введите координату 'X' фигуры">
    <input type="text" name="y" step="1" placeholder="Введите координату 'Y' фигуры">
    <input type="number" name="coefficient" step="1" placeholder="Введите коэффициент">
    <input type="submit" value="Результат"><hr />
</form>
<?php
include 'figure.php';
?>

</body>
</html>