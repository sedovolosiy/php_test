<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="?circle=1" method="post">
    <input type="number" name="radius" step="1" value="" placeholder="Введите радиус круга">
    <input type="number" name="x" step="1" value="" placeholder="Введите координату 'X' фигуры">
    <input type="number" name="y" step="1" value="" placeholder="Введите координату 'Y' фигуры">
    <input type="submit" value="Результат"><hr />
</form>
<form action="?square=1" method="post">
    <input type="number" name="height" step="1" value="" placeholder="Введите высоту прямоугольника">
    <input type="number" name="width" step="1" value="" placeholder="Введите ширину прямоугольника">
    <input type="number" name="x" step="1" value="" placeholder="Введите координату 'X' фигуры">
    <input type="number" name="y" step="1" value="" placeholder="Введите координату 'Y' фигуры">
    <input type="submit" value="Результат"><hr />
</form>
<form action="?treangle=1" method="post">
    <input type="number" name="height" step="1" value="" placeholder="Введите высоту треугольника">
    <input type="number" name="width" step="1" value="" placeholder="Введите основание треугольника">
    <input type="number" name="x" step="1" value="" placeholder="Введите координату 'X' фигуры">
    <input type="number" name="y" step="1" value="" placeholder="Введите координату 'Y' фигуры">
    <input type="submit" value="Результат"><hr />
</form>
<?php
include 'figure.php';
?>

</body>
</html>