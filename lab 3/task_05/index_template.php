<?php

require_once 'LightElementNode.php';
require_once 'LightTextNode.php';
require_once 'State/VisibleState.php';

$div = new LightElementNode("div");
$div->setState(new VisibleState());
$div->addClass("container");
$div->addChild(new LightTextNode("Привіт з шаблонного методу!"));

echo "--- Render with lifecycle hooks ---\n";
echo $div->renderWithLifecycle();
