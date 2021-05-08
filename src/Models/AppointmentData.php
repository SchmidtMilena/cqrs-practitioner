<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use App\Models\Interfaces\Serializable;

class AppointmentData implements Serializable
{
    private int $patient_id;

    private Carbon $date;

    public function __construct(int $patient_id, Carbon $date)
    {
        $this->patient_id = $patient_id;
        $this->date = $date;
    }

    public function getPatientId(): int
    {
        return $this->patient_id;
    }

    public function getDate(): Carbon
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
