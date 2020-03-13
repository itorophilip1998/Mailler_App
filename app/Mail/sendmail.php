<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;

class sendmail extends Mailable
{
    use Queueable, SerializesModels;
    public $ema;
    public $sub;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($subject,$email)
    {
        $this->ema=$email;
        $this->sub=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_mail = $this->ema;
        $e_subject = $this->sub;

        $send=$this->from('itorophilip1998@gmail.com')->subject($e_subject)->view('SendMail',compact('e_mail'));
        Session::flash( 'success_message',"Mail Successfully Sent!");
        return $send; 

    }
}
