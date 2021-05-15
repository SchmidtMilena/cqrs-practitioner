<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Interfaces\Serializable;
use Illuminate\Notifications\Notifiable;

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
    use Notifiable;

    private ?int $id;

    private string $name;

    private string $lastName;

    private string $pesel;

    private string $email;

    public function __construct(?int $id, string $name, string $lastName, string $pesel, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->pesel = $pesel;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function routeNotificationForMail(): string
    {
        return $this->getEmail();
    }
}
