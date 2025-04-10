<?php
require_once 'Circle.php';
require_once 'RasterRenderer.php';
require_once 'Shape.php';
require_once 'Square.php';
require_once 'Triangle.php';
require_once 'VectorRenderer.php';

$raster = new RasterRenderer();
$vector = new VectorRenderer();

$circleRaster = new Circle($raster);
$squareRaster = new Square($raster);

$triangleVector = new Triangle($vector);
$circleVector = new Circle($vector);

$circleRaster->draw();
$squareRaster->draw();
$triangleVector->draw();
$circleVector->draw();