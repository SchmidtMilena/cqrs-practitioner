<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Interfaces\ProcessorInterface;

class AddNewPatientProcessor implements ProcessorInterface
{
    public function process(): void
    {
        echo 'dziala new patient';
    }

    public function logEvent(): void
    {

    }
}
