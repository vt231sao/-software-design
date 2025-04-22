<?php

require_once 'TextEditor.php';

$editor = new TextEditor();

echo "Введення тексту...\n";
$editor->type("Привіт, ");
$editor->type("світ!\n");

echo "\nПоточний текст:\n";
echo $editor->getText();

echo "\nВідкат (Undo)...\n";
$editor->undo();

echo "\nПоточний текст після відкату:\n";
echo $editor->getText();

echo "\nЩе один відкат...\n";
$editor->undo();

echo "\nПоточний текст після другого відкату:\n";
echo $editor->getText();
