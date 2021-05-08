<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Commands\AddNewAppointment;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AddNewAppointmentHandler
{
    private AppointmentRepositoryInterface $appointmentRepository;

    public function __construct(AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }

    public function __invoke(AddNewAppointment $command)
    {

    }

    private function saveToDatabase(): void
    {

    }

    private function sendMailToPatient(string $email): void
    {

    }
}
