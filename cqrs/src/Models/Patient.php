<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 * @package App\Models
 * @property int $id,
 * @property string $name,
 * @property string $lastName,
 * @property string $pesel,
 * @property string $email,
 * @property CarbonImmutable $created_at,
 * @property CarbonImmutable $updated_at
 */
class Patient extends Model
{
    protected $casts = [
        'name' => 'string',
        'lastName' => 'string',
        'pesel' => 'string',
        'email' => 'string'
    ];
}
