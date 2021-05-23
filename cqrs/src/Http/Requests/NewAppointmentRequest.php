<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Carbon\CarbonImmutable;
use Illuminate\Foundation\Http\FormRequest;

class NewAppointmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $date = new CarbonImmutable();
        return [
            'patient_id' => 'required|exists:patients,id',
            'date' => 'date|after_or_equal:' . $date
        ];
    }
}
