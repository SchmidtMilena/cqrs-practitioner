<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AppointmentRepository implements AppointmentRepositoryInterface
{

    public function getById(int $id): Appointment
    {
        // TODO: Implement getById() method.
    }

    public function create(array $data): void
    {
        // TODO: Implement create() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement deleteAppointment() method.
    }
}
