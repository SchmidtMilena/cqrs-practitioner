<?php

declare(strict_types=1);

namespace App\Handlers;

use App\Models\Patient;
use App\Models\AppointmentData;
use App\Commands\AddNewAppointment;
use App\Models\Interfaces\Serializable;
use App\Notifications\NewAppointmentMail;
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
        $this->sendMailToPatient($command->getPatient(), $command->getAppointmentData());
    }

    private function saveToDatabase(Serializable $serializable): void
    {
        $newAppointmentArray = $serializable->serialize();
        $this->appointmentRepository->create($newAppointmentArray);
    }

    private function sendMailToPatient(Patient $patient, AppointmentData $appointmentData): void
    {
        $patient->notify(new NewAppointmentMail($appointmentData));
    }
}
