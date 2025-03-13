<?php
require_once "IProneFactory.php";
require_once "KiaomiFactory.php";
require_once "BalaxyFactory.php";

function testFactory(DeviceFactory $factory) {
    $laptop = $factory->createLaptop();
    echo $laptop->getName() . "\n";

    $netbook = $factory->createNetbook();
    echo $netbook->getName() . "\n";

    $ebook = $factory->createEBook();
    echo $ebook->getName() . "\n";

    $smartphone = $factory->createSmartphone();
    echo $smartphone->getName() . "\n\n";
}

echo "IProne Factory:\n";
testFactory(new IProneFactory());

echo "Kiaomi Factory:\n";
testFactory(new KiaomiFactory());

echo "Balaxy Factory:\n";
testFactory(new BalaxyFactory());
