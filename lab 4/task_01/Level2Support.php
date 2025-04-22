<?php

require_once 'BaseHandler.php';

class Level2Support extends BaseHandler {
    public function handle(string $input): ?string {
        if ($input === '2') {
            return "Level 2: Ваш запит передано до технічного фахівця.";
        }
        return parent::handle($input);
    }
}
