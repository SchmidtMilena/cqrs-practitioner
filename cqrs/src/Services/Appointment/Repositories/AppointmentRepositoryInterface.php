<?php

declare(strict_types=1);

namespace App\Services\Appointment\Repositories;

use App\Models\AppointmentData;

interface AppointmentRepositoryInterface
{
    public function create(AppointmentData $appointmentData): AppointmentData;

    public function delete(int $id): void;
}
