<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

use App\Models\Patient;

interface PatientRepositoryInterface
{
    public function getById(int $id): Patient;

    public function create(array $data): void;
}
