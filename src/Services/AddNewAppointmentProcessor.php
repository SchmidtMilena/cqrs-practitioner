<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Interfaces\ProcessorInterface;

class AddNewAppointmentProcessor implements ProcessorInterface
{
    public function process(): void
    {
        echo 'dziala new appointment';
    }

    public function logEvent(): void
    {

    }
}
