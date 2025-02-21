<?php

class Money {
    private int $whole;
    private int $cents;

    public function __construct(int $whole, int $cents) {
        if ($whole < 0 || $cents < 0) {
            throw new InvalidArgumentException("Сума не може бути негативною");
        }
        $this->whole = $whole;
        $this->cents = $cents;
    }

    public function getAmount(): float {
        return $this->whole + $this->cents / 100;
    }
    public function decrease(int $whole, int $cents): Money {
        $total = $this->getAmount() - ($whole + $cents / 100);
        if ($total < 0) {
            throw new InvalidArgumentException("Зменшена сума не може бути негативною");
        }
        return new Money((int)$total, (int)(($total - (int)$total) * 100));
    }
}