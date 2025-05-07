<?php

require_once 'LightElementNode.php';
require_once 'LightTextNode.php';
require_once 'State/VisibleState.php';
require_once 'State/HiddenState.php';
require_once 'State/CollapsedState.php';

$div = new LightElementNode('div');
$div->addChild(new LightTextNode("Hello world"));
$div->addClass("content");

$div->setState(new VisibleState());
echo "Стан: " . $div->getState() . "\n";
echo $div->getOuterStateHTML() . "\n\n";

$div->setState(new HiddenState());
echo "Стан: " . $div->getState() . "\n";
echo $div->getOuterStateHTML() . "\n\n";

$div->setState(new CollapsedState());
echo "тан: " . $div->getState() . "\n";
echo $div->getOuterStateHTML() . "\n";
