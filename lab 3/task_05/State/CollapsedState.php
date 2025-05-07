<?php

require_once 'ElementState.php';

class CollapsedState implements ElementState {
    public function render(LightElementNode $element): string {
        $classBackup = $element->getCssClasses();
        $element->addClass('display-none');
        $result = $element->defaultRender();
        $element->setCssClasses($classBackup);
        return $result;
    }

    public function getName(): string {
        return 'collapsed';
    }
}
