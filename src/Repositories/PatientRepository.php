<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Patient;
use App\Repositories\Interfaces\PatientRepositoryInterface;

class PatientRepository implements PatientRepositoryInterface
{
    public function findById(int $id): Patient
    {
        return Patient::findOrFail($id);
    }

    public function create(array $data): void
    {
        Patient::create($data);
    }
}
