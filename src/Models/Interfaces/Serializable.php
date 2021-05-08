<?php

declare(strict_types=1);

namespace App\Models\Interfaces;

interface Serializable
{
    public function serialize(): array;
}
