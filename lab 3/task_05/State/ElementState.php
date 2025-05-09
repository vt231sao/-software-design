<?php

interface ElementState {
    public function render(LightElementNode $element): string;
    public function getName(): string;
}
