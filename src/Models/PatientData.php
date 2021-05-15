<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Interfaces\Serializable;

/**
 * Class NewPatientData
 * @package App\Models
 * @property string $name,
 * @property string $lastName,
 * @property string $pesel,
 * @property string $email,
 */
class PatientData implements Serializable
{
    private string $name;

    private string $lastName;

    private string $pesel;

    private string $email;

    public function __construct(string $name, string $lastName, string $pesel, string $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->pesel = $pesel;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPesel(): string
    {
        return $this->pesel;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function serialize(): array
    {
        return [
            'name' => $this->name,
            'lastName' => $this->lastName,
            'pesel' => $this->pesel,
            'email' => $this->email,
        ];
    }
}
