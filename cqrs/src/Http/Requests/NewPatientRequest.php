<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewPatientRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'min:2',
                'regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            ],
            'lastName' => [
                'required',
                'min:2',
                'regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            ],
            'pesel' => 'required|digits:11',
            'email' => 'required|email:rfc,dns'
        ];
    }
}
