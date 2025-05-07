<?php

require_once 'ElementState.php';

class HiddenState implements ElementState {
    public function render(LightElementNode $element): string {
        return "<!-- Hidden element {$element->getTagName()} -->";
    }

    public function getName(): string {
        return 'hidden';
    }
}
