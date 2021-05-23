<?php

declare(strict_types=1);

namespace App\Services\Patient\Commands;

class AddNewPatient
{
    public string $name;
    public string $lastName;
    public string $pesel;
    public string $email;

    public function __construct(string $name, string $lastName, string $pesel, string $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->pesel = $pesel;
        $this->email = $email;
    }
}
