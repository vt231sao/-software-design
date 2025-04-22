<?php

class Runway
{
    public string $id;
    public ?Aircraft $occupiedBy = null;

    public function __construct()
    {
        $this->id = uniqid("Runway_");
    }

    public function isFree(): bool
    {
        return $this->occupiedBy === null;
    }

    public function occupy(Aircraft $aircraft): void
    {
        $this->occupiedBy = $aircraft;
        echo "Runway {$this->id} is now occupied by aircraft {$aircraft->name}.\n";
    }

    public function release(): void
    {
        if ($this->occupiedBy !== null) {
            echo "Runway {$this->id} is now free (aircraft {$this->occupiedBy->name} took off).\n";
            $this->occupiedBy = null;
        }
    }
}
