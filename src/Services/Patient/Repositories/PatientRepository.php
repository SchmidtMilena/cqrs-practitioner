<?php

declare(strict_types=1);

namespace App\Services\Patient\Repositories;

use App\Models\Patient;

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
