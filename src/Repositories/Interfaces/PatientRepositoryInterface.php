<?php

declare(strict_types=1);

namespace App\Repositories\Interfaces;

interface PatientRepositoryInterface
{
    public function create(array $data): void;
}
