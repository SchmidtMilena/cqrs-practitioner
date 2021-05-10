<?php

declare(strict_types=1);

namespace App\Services\Patient\Repositories;

use App\Models\Patient;

interface PatientRepositoryInterface
{
    public function findById(int $id): Patient;

    public function create(array $data): void;
}
