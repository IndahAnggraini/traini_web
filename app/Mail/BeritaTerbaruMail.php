<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BeritaTerbaruMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    //detail di controller
    public function __construct($details)
    {
        // utk ma ambiak detail di public
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //subjek berguna sbgai judul di email
        return $this->subject('Upload Berita Terbaru')
                ->view('email.send_mail');
    }
}
