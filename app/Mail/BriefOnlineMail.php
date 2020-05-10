<?php

namespace App\Mail;

//use App\Feedback;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BriefOnlineMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $brief;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $brief)
    {
        $this->brief = $brief;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $arr = [
            'brief' => $this->brief,
            'pathToFile' => base_path() . '/public/img/makklays.png',
        ];
        // добавляем файл - загруженный клиентом
        if(isset($this->brief->tzfile_name) && !empty($this->brief->tzfile_name)) {
            $arr['pathToBrief'] = base_path() . '/public/uploads/briefs/' . $this->brief->tzfile_name;
        }

        return $this->from('info@makklays.com.ua')
            //->from('mailgun@sandboxce1c29b0ff01419da0d9370c2deb2c3d.mailgun.org')
            ->to('office@makklays.com.ua')
            ->subject('Brief Online | Makklays.com.ua')
            ->view('emails.brief_online')
            ->with($arr);
            /*->attach(base_path() . '/public/img/makklays_.png', [
                'as' => 'makklays_logo',
                'mime' => 'image/png',
            ])*/
            //->attachData($this->brief->tzfile, $this->brief->tzfile_name);
            // Attach a file from a raw $data string...
            //->attachData($this->brief->tzfile, $name, array $options = []);
    }
}
