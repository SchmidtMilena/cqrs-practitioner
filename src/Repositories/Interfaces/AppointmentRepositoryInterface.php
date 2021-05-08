<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\Appointment;
use App\Models\AppointmentData;

interface AppointmentRepositoryInterface
{
    public function getById(int $id): Appointment;

    public function create(AppointmentData $data): void;

    public function deleteAppointment(int $id): void;
}
