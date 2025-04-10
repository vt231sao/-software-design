<?php

require_once 'LightTextNode.php';
require_once 'LightElementNode.php';
$ul = new LightElementNode('ul', 'block');
$ul->addClass('my-list');

for ($i = 1; $i <= 3; $i++) {
    $li = new LightElementNode('li', 'block');
    $li->addChild(new LightTextNode("Item $i"));
    $ul->addChild($li);
}

echo "Outer HTML:\n";
echo $ul->getOuterHTML() . "\n";

echo "\nInner HTML:\n";
echo $ul->getInnerHTML() . "\n";

echo "\nКількість дочірніх елементів у <ul>: " . $ul->getChildCount() . "\n";
