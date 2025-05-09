<?php

require_once 'LightElementNode.php';
require_once 'LightTextNode.php';
require_once 'CommandInvoker.php';
require_once 'AddClassCommand.php';

$li = new LightElementNode('li');
$li->addChild(new LightTextNode("Командний шаблон"));

$invoker = new CommandInvoker();
$command = new AddClassCommand($li, 'highlight');

echo "До виконання команди:\n";
echo $li->getOuterHTML() . "\n";

$invoker->execute($command);
echo "Після виконання команди:\n";
echo $li->getOuterHTML() . "\n";

$invoker->undo();
echo "Після undo:\n";
echo $li->getOuterHTML() . "\n";
