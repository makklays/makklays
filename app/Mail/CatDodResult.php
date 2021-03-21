<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CatDodResult extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $click = '';
        $click2 = '';
        return $this->from('info@makklays.com.ua')
                    ->to('phpdevops@gmail.com')
                    ->view('emails.cat_dog_result')
                    ->with([
                        'click' => $click,
                        'click2' => $click2,
                    ]);
    }
}
