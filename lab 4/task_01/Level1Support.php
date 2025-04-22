<?php

require_once 'BaseHandler.php';

class Level1Support extends BaseHandler {
    public function handle(string $input): ?string {
        if ($input === '1') {
            return "Level 1: Ваш запит оброблено базовою підтримкою.";
        }
        return parent::handle($input);
    }
}
