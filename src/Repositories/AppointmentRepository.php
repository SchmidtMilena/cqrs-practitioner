<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AppointmentRepository implements AppointmentRepositoryInterface
{
    public function create(array $data): void
    {
        Appointment::create($data);
    }

    public function delete(int $id): void
    {
        Appointment::where('id', $id)->delete();
    }
}
