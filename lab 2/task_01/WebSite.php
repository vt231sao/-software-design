<?php
require_once "Subscription.php";
require_once "SubscriptionFactory.php";

class WebSite implements SubscriptionFactory {
    public function createSubscription(string $type): ?Subscription {
        echo "Замовлення через веб-сайт...\n";
        return match ($type) {
            "Domestic" => new DomesticSubscription(),
            "Educational" => new EducationalSubscription(),
            "Premium" => new PremiumSubscription(),
            default => null,
        };
    }
}
