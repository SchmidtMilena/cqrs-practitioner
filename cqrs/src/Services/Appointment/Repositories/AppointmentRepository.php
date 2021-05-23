<?php

declare(strict_types=1);

namespace App\Services\Appointment\Repositories;

use App\Models\Appointment;
use App\Models\AppointmentData;
use Carbon\CarbonImmutable;

class AppointmentRepository implements AppointmentRepositoryInterface
{
    public function create(AppointmentData $appointmentData): AppointmentData
    {
        $appointment = new Appointment();
        $appointment->patient_id = $appointmentData->getPatientId();
        $appointment->date = $appointmentData->getDate();
        $appointment->saveOrFail();

        return $this->mapToAppointmentData($appointment);
    }

    public function delete(int $id): void
    {
        Appointment::where('id', $id)->delete();
    }

    private function mapToAppointmentData(Appointment $appointment): AppointmentData
    {
        return new AppointmentData(
            $appointment->id,
            $appointment->patient_id,
            new CarbonImmutable($appointment->date)
        );
    }
}
