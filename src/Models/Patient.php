<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 * @package App\Models
 * @property int $id,
 * @property string $name,
 * @property string $lastName,
 * @property string $pesel,
 * @property string $email,
 * @property Carbon $created_at,
 * @property Carbon $updated_at
 */
class Patient extends Model
{
    protected $fillable = [
        'name',
        'lastName',
        'pesel',
        'email'
    ];

    protected $casts = [
        'name' => 'string',
        'lastName' => 'string',
        'pesel' => 'string',
        'email' => 'string'
    ];
}
