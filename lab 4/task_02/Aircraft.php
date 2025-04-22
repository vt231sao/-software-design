<?php

class Aircraft
{
    public string $name;
    public bool $isTakingOff = false;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function requestLanding(CommandCentre $centre): void
    {
        echo "Aircraft {$this->name} requests landing.\n";
        $centre->handleLandingRequest($this);
    }

    public function requestTakeOff(CommandCentre $centre): void
    {
        echo "Aircraft {$this->name} requests takeoff.\n";
        $centre->handleTakeOffRequest($this);
    }
}
