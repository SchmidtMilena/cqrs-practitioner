<?php

declare(strict_types=1);

namespace App\Services\Appointment\Handlers;

use App\Services\Appointment\Commands\CancelAppointment;
use App\Services\Appointment\Repositories\AppointmentRepositoryInterface;

class CancelAppointmentHandler
{
    private AppointmentRepositoryInterface $appointmentRepository;

    public function __construct(AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }

    public function __invoke(CancelAppointment $command): void
    {
        $this->appointmentRepository->delete($command->appointmentId);
    }
}
