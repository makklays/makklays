<?php

namespace App\Mail;

use App\Feedback;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $feedback;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mailgun@sandboxce1c29b0ff01419da0d9370c2deb2c3d.mailgun.org')
            ->to('phpdevops@gmail.com')
            ->subject('Feedback | Makklays.com.ua')
            ->view('emails.feedback')
            ->with([
                'name' => $this->feedback->name,
                'email' => $this->feedback->email,
                'message2' => $this->feedback->message,
                'pathToFile' => base_path() . '/public/img/makklays.png',
            ])
            ->attach(base_path() . '/public/img/makklays.png', [
                'as' => 'makklays_logo',
                'mime' => 'image/png',
            ]);
    }
}
