<?php

require_once 'ElementState.php';

class VisibleState implements ElementState {
    public function render(LightElementNode $element): string {
        return $element->defaultRender();
    }

    public function getName(): string {
        return 'visible';
    }
}
