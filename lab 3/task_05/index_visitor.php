<?php

require_once 'LightElementNode.php';
require_once 'LightTextNode.php';
require_once 'Visitor/RenderStatsVisitor.php';

$root = new LightElementNode('div');
$root->addClass('container');

$header = new LightElementNode('h1');
$header->addChild(new LightTextNode('Привіт, світ!'));

$paragraph = new LightElementNode('p');
$paragraph->addChild(new LightTextNode('Це абзац тексту.'));

$root->addChild($header);
$root->addChild($paragraph);

$visitor = new RenderStatsVisitor();
$root->accept($visitor);

echo "Елементів: " . $visitor->getElementCount() . "\n";
echo "Текстових вузлів: " . $visitor->getTextCount() . "\n";
