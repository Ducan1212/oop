<?php
namespace App\Services;

class EmailOnly implements Notify
{
    protected $mailer;
 
    public function __construct()
    {
        $this->mailer = app(MailAdapter::class);
    }
 
    public function send($subject, $template, $data)
    {
        $this->mailer->send($subject, $template, $data);
    }
}