<?php

require_once 'BaseHandler.php';

class Level3Support extends BaseHandler {
    public function handle(string $input): ?string {
        if ($input === '3') {
            return "Level 3: Ваш запит передано до адміністратора системи.";
        }
        return parent::handle($input);
    }
}
