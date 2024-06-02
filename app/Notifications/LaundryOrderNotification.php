<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Notification;

class LaundryOrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $orderId;
    public $message; // Optional: Add a custom message

    /**
     * Create a new notification instance.
     *
     * @param int $orderId
     * @param string $message (optional)
     */
    public function __construct($orderId, $message = null)
    {
        $this->orderId = $orderId;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database']; // You can choose other channels here
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Your laundry order has been placed!')
                    ->action('Track Order', url('/orders/' . $this->orderId))
                    ->line('For details, please visit the above link.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'order_id' => $this->orderId,
            'message' => $this->message, // Include custom message if set
            'created_at' => now(),
        ];
    }
}
