<?php

abstract class Subscription {
    protected string $name;
    protected float $monthlyFee;
    protected int $minPeriod;
    protected array $channels;

    public function __construct(string $name, float $monthlyFee, int $minPeriod, array $channels) {
        $this->name = $name;
        $this->monthlyFee = $monthlyFee;
        $this->minPeriod = $minPeriod;
        $this->channels = $channels;
    }

    public function getInfo(): string {
        return "Підписка: {$this->name}, Ціна: {$this->monthlyFee} грн/міс, Мінімальний термін: {$this->minPeriod} міс";
    }
}

class DomesticSubscription extends Subscription {
    public function __construct() {
        parent::__construct("Домашня", 100, 6, ["Новини", "Спорт", "Розваги"]);
    }
}

class EducationalSubscription extends Subscription {
    public function __construct() {
        parent::__construct("Освітня", 80, 3, ["Наука", "Документальні", "Навчальні програми"]);
    }
}

class PremiumSubscription extends Subscription {
    public function __construct() {
        parent::__construct("Преміум", 200, 12, ["Фільми", "Серіали", "Спорт HD", "Ексклюзивний контент"]);
    }
}
