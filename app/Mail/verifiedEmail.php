<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Crypt;

class verifiedEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($send_data)
    {
        $id_user = $send_data->id;
        $matcher = $send_data->password;

        // $this->link = '/verify/'. Crypt::encryptString($id_user).'/'.$matcher;
        $this->link = '/verify/'. Crypt::encryptString($id_user).'/'.$matcher;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.email_verification')->subject("verifikasi email BMT AT-TA'AWUN");
    }
}
