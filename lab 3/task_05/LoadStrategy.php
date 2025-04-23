<?php

interface LoadStrategy {
    public function load(string $src): string;
}
