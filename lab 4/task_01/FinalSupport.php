<?php

require_once 'BaseHandler.php';

class FinalSupport extends BaseHandler {
    public function handle(string $input): ?string {
        if ($input === '4') {
            return "Final Support: Ваш запит потребує особистої консультації.";
        }
        return parent::handle($input);
    }
}
