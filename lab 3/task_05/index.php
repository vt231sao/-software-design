<?php

require_once 'LightTextNode.php';
require_once 'LightElementNode.php';
require_once 'LightNodeIterator.php';

$ul = new LightElementNode('ul', 'block');
$ul->addClass('my-list');

for ($i = 1; $i <= 3; $i++) {
    $li = new LightElementNode('li', 'block');
    $li->addChild(new LightTextNode("Item $i"));

    $li->addEventListener('click', function ($element) use ($i) {
        echo "Clicked on item $i\n";
    });

    $ul->addChild($li);
}

echo "Triggering click on 2nd item \n";
$ul->triggerEvent('click');
$ul->getInnerHTML();

echo "Triggering click on LI[2]\n";
$ulChildren = (new ReflectionClass($ul))->getProperty('children');
$ulChildren->setAccessible(true);
$secondLi = $ulChildren->getValue($ul)[1];
$secondLi->triggerEvent('click');

echo "\nOuter HTML:\n";
echo $ul->getOuterHTML() . "\n";

echo "\nInner HTML:\n";
echo $ul->getInnerHTML() . "\n";

echo "\nКількість дочірніх елементів у <ul>: " . $ul->getChildCount() . "\n";


require_once 'LightNodeIterator.php';

echo "\nDFS Traversal:\n";
$dfs = new LightNodeIterator($ul, 'DFS');
foreach ($dfs as $node) {
    echo get_class($node) . ': ' . $node->getOuterHTML() . "\n";
}

echo "\nBFS Traversal:\n";
$bfs = new LightNodeIterator($ul, 'BFS');
foreach ($bfs as $node) {
    echo get_class($node) . ': ' . $node->getOuterHTML() . "\n";
}
