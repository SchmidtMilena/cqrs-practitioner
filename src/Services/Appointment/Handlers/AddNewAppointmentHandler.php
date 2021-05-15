<?php

declare(strict_types=1);

namespace App\Services\Appointment\Handlers;

use App\Models\AppointmentData;
use App\Models\Interfaces\Serializable;
use App\Notifications\NewAppointmentMail;
use App\Services\Appointment\Commands\AddNewAppointment;
use App\Services\Appointment\Repositories\AppointmentRepositoryInterface;
use App\Services\Patient\Repositories\PatientRepositoryInterface;

class AddNewAppointmentHandler
{
    private AppointmentRepositoryInterface $appointmentRepository;
    private PatientRepositoryInterface $patientRepository;

    public function __construct(
        AppointmentRepositoryInterface $appointmentRepository,
        PatientRepositoryInterface $patientRepository
    )
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->patientRepository = $patientRepository;
    }

    public function __invoke(AddNewAppointment $command): void
    {
        $this->saveToDatabase($command->getAppointmentData());
        $this->sendMailToPatient($command->getAppointmentData());
    }

    private function saveToDatabase(Serializable $serializable): void
    {
        $newAppointmentArray = $serializable->serialize();
        $this->appointmentRepository->create($newAppointmentArray);
    }

    private function sendMailToPatient(AppointmentData $appointmentData): void
    {
        $patient = $this->patientRepository->findById($appointmentData->getPatientId());
        $patient->notify(new NewAppointmentMail($appointmentData));
    }
}
