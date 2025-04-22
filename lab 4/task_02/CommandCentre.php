<?php

class CommandCentre
{
    private array $runways = [];

    public function __construct(array $runways)
    {
        $this->runways = $runways;
    }

    public function handleLandingRequest(Aircraft $aircraft): void
    {
        foreach ($this->runways as $runway) {
            if ($runway->isFree()) {
                $runway->occupy($aircraft);
                return;
            }
        }
        echo "No free runway available for aircraft {$aircraft->name}.\n";
    }

    public function handleTakeOffRequest(Aircraft $aircraft): void
    {
        foreach ($this->runways as $runway) {
            if ($runway->occupiedBy === $aircraft) {
                $aircraft->isTakingOff = true;
                $runway->release();
                return;
            }
        }
        echo "Aircraft {$aircraft->name} is not on any runway.\n";
    }
}
