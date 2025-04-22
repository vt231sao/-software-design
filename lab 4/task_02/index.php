<?php

require_once 'Aircraft.php';
require_once 'Runway.php';
require_once 'CommandCentre.php';

$runway1 = new Runway();
$runway2 = new Runway();
$centre = new CommandCentre([$runway1, $runway2]);

$aircraft1 = new Aircraft("Boeing-747");
$aircraft2 = new Aircraft("Airbus-A320");
$aircraft3 = new Aircraft("F-16");

echo "\n-- Landing Phase --\n";
$aircraft1->requestLanding($centre);
$aircraft2->requestLanding($centre);
$aircraft3->requestLanding($centre);

echo "\n-- Takeoff Phase --\n";
$aircraft1->requestTakeOff($centre);

echo "\n-- Second Landing Attempt --\n";
$aircraft3->requestLanding($centre);
