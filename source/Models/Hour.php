<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Core\Model;

class Hour extends Model {
    
    protected $id;
    protected $courtId;
    protected $startTime;
    protected $endTime;
    protected $available;

    public function __construct(
        int $id = null,
        int $courtId = null,
        string $startTime = null,
        string $endTime = null,
        bool $available = null
    ) 
    {
        $this->table = "hours";
        $this->id = $id;
        $this->courtId = $courtId;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->available = $available;
    }

     public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getCourtId(): ?int
    {
        return $this->courtId;
    }

    public function setCourtId(?int $courtId): void
    {
        $this->courtId = $courtId;
    }

    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    public function setStartTime(?string $startTime): void
    {
        $this->startTime = $startTime;
    }

    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    public function setEndTime(?string $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setavAilable(?bool $available): void
    {
        $this->available = $available;
    }

    
    
}