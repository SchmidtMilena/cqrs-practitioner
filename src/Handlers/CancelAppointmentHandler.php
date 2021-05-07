<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Services\Interfaces\ProcessorInterface;

class CancelAppointmentHandler
{
    private ProcessorInterface $processor;

    public function __construct(ProcessorInterface $processor)
    {
        $this->processor = $processor;
    }

}
