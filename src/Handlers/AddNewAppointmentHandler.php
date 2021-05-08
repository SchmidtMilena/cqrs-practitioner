<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Models\Patient;
use App\Commands\AddNewAppointment;
use App\Models\Interfaces\Serializable;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AddNewAppointmentHandler
{
    private AppointmentRepositoryInterface $appointmentRepository;

    public function __construct(AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }

    public function __invoke(AddNewAppointment $command): void
    {
        $this->saveToDatabase($command->getAppointmentData());
        $this->sendMailToPatient($command->getPatient());
    }

    private function saveToDatabase(Serializable $serializable): void
    {
        $this->appointmentRepository->create($serializable->serialize());
    }

    private function sendMailToPatient(Patient $patient): void
    {

    }
}
