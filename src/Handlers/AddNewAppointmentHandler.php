<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Commands\AddNewAppointment;
use App\Commands\Interfaces\CommandInterface;
use App\Services\Interfaces\ProcessorInterface;

class AddNewAppointmentHandler
{
    private ProcessorInterface $processor;

    public function __construct(ProcessorInterface $processor)
    {
        $this->processor = $processor;
    }

    public function __invoke(AddNewAppointment $command)
    {
        $this->processor->process();
    }
}
