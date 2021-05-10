<?php

declare(strict_types=1);

namespace App\Services\Appointment\Handlers;

use App\Models\Patient;
use App\Models\AppointmentData;
use App\Models\Interfaces\Serializable;
use App\Notifications\NewAppointmentMail;
use App\Services\Appointment\Commands\AddNewAppointment;
use App\Services\Appointment\Repositories\AppointmentRepositoryInterface;

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
