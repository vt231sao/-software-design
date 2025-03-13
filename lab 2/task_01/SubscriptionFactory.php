<?php

interface SubscriptionFactory {
    public function createSubscription(string $type): ?Subscription;
}
