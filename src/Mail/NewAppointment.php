<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\AppointmentData;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewAppointment extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private AppointmentData $appointmentData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(AppointmentData $appointmentData)
    {
        $this->appointmentData = $appointmentData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
