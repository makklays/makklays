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
        return $this->from('info@makklays.com.ua')
            ->to('phpdevops@gmail.com')
            ->view('emails.feedback')
            ->with([
                'name' => $this->feedback->name,
                'email' => $this->feedback->email,
                'message' => $this->feedback->message,
                'pathToFile' => '/img/makklays.png',
            ])
            ->attach('/img/makklays.png', [
                'as' => 'makklays_logo',
                'mime' => 'application/png',
            ]);
    }
}
