<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Interfaces\ProcessorInterface;

class CancelAppointmentProcessor implements ProcessorInterface
{
    public function process(): void
    {
        echo 'dziala cancel appointment';
    }

    public function logEvent(): void
    {

    }
}
