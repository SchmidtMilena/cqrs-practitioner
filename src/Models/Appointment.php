<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 * @package App\Models
 * @property int $id,
 * @property int $patient_id,
 * @property CarbonImmutable $date,
 * @property CarbonImmutable $created_at,
 * @property CarbonImmutable $updated_at
 */
class Appointment extends Model
{
    protected $casts = [
        'id' => 'int',
        'patient_id' => 'int',
        'date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
