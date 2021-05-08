<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

interface AppointmentRepositoryInterface
{
    public function create(array $data): void;

    public function delete(int $id): void;
}
