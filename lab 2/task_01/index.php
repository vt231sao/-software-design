<?php
require_once "WebSite.php";
require_once "MobileApp.php";
require_once "ManagerCall.php";

$webFactory = new WebSite();
$mobileFactory = new MobileApp();
$managerFactory = new ManagerCall();

$subscription1 = $webFactory->createSubscription("Premium");
echo $subscription1->getInfo() . "\n\n";

$subscription2 = $mobileFactory->createSubscription("Domestic");
echo $subscription2->getInfo() . "\n\n";

$subscription3 = $managerFactory->createSubscription("Educational");
echo $subscription3->getInfo() . "\n\n";
