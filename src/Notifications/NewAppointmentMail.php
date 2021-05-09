<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Models\AppointmentData;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewAppointmentMail extends Notification
{
    use Queueable;

    private AppointmentData $appointmentData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(AppointmentData $appointmentData)
    {
        $this->appointmentData = $appointmentData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }
}
