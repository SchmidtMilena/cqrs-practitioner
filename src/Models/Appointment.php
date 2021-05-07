<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 * @package App\Models
 * @property int $id,
 * @property int $patient_id,
 * @property Carbon $date,
 * @property Carbon $created_at,
 * @property Carbon $upadted_at
 */
class Appointment extends Model
{
    protected $fillable = [
       'patient_id',
       'date'
    ];

    protected $casts = [
        'id' => 'int',
        'patient_id' => 'int',
        'date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
