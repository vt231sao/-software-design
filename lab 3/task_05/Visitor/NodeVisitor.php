<?php

interface NodeVisitor {
    public function visitElement(LightElementNode $element): void;
    public function visitText(LightTextNode $text): void;
}
