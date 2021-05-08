<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\AppointmentData;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AppointmentRepository implements AppointmentRepositoryInterface
{

    public function getById(int $id): Appointment
    {
        // TODO: Implement getById() method.
    }

    public function create(AppointmentData $data): void
    {
        // TODO: Implement create() method.
    }

    public function deleteAppointment(int $id): void
    {
        // TODO: Implement deleteAppointment() method.
    }
}
