<?php

require_once 'ImageNode.php';
require_once 'FileLoadStrategy.php';
require_once 'NetworkLoadStrategy.php';

$img1 = new ImageNode("https://university.edu/images/lab4.png", new NetworkLoadStrategy());
$img2 = new ImageNode("image/photo.jpg", new FileLoadStrategy());
echo $img1->getOuterHTML() . "\n";
$img1->load();

echo $img2->getOuterHTML() . "\n";
$img2->load();
