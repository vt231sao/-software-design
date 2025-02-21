<?php

class Money {
    private int $whole;
    private int $cents;

    public function __construct(int $whole, int $cents) {
        $this->whole = $whole;
        $this->cents = $cents;
    }

    public function getAmount(): float {
        return floatval("$this->whole.$this->cents");
    }

    public function setAmount(int $whole, int $cents): void {
        $this->whole = $whole;
        $this->cents = $cents;
    }
}