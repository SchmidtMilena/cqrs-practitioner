<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\Appointment;;

interface AppointmentRepositoryInterface
{
    public function getById(int $id): Appointment;

    public function create(array $data): void;

    public function delete(int $id): void;
}
