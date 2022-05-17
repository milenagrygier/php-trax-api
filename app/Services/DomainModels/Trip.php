<?php

declare(strict_types=1);

namespace App\Services\DomainModels;

use Carbon\CarbonImmutable;

class Trip
{
    private $id;
    private $userId;
    private $car;
    private $date;
    private $miles;

    public function __construct(int $id, int $userId, Car $car, CarbonImmutable $date, ?float $miles) {
        $this->id = $id;
        $this->userId = $userId;
        $this->car = $car;
        $this->date = $date;
        $this->miles= $miles;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getCar(): Car
    {
        return $this->car;
    }

    public function getDate(): CarbonImmutable
    {
        return $this->date;
    }

    public function getMiles(): ?float
    {
        return $this->miles;
    }
}
