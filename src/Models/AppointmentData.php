<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Interfaces\Serializable;
use Carbon\CarbonImmutable;

/**
 * Class AppointmentData
 * @package App\Models
 * @property int $patient_id,
 * @property CarbonImmutable $date,
 */
class AppointmentData implements Serializable
{
    private ?int $id;

    private int $patient_id;

    private CarbonImmutable $date;

    public function __construct(?int $id, int $patient_id, CarbonImmutable $date)
    {
        $this->id = $id;
        $this->patient_id = $patient_id;
        $this->date = $date;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatientId(): int
    {
        return $this->patient_id;
    }

    public function getDate(): CarbonImmutable
    {
        return $this->date;
    }

    public function serialize(): array
    {
        return [
            'patient_id' => $this->patient_id,
            'date' => $this->date,
        ];
    }
}
