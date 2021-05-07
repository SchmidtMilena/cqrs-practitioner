<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Commands\AddNewPatient;
use App\Services\Interfaces\ProcessorInterface;

class AddNewPatientHandler
{
    private ProcessorInterface $processor;

    public function __construct(ProcessorInterface $processor)
    {
        $this->processor = $processor;
    }

    public function __invoke(AddNewPatient $command)
    {
        $this->processor->process();
    }
}
