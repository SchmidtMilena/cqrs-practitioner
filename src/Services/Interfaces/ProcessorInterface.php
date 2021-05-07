<?php

declare(strict_types=1);

namespace App\Services\Interfaces;

interface ProcessorInterface
{
    public function process(): void;

    public function logEvent(): void;
}
