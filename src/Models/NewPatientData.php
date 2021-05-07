<?php

declare(strict_types=1);

namespace App\Models;

/**
 * Class NewPatientData
 * @package App\Models
 * @property string $name,
 * @property string $lastName,
 * @property string $pesel,
 * @property string $email,
 */
class NewPatientData
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
}
