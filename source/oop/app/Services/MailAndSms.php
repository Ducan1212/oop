<?php

namespace App\Services;

use App\Services\MailAdapter;
use App\Services\SmsAdapter;

class MailAndSms implements Notify
{
    protected $mailer;
    protected $sms;

    public function __construct()
    {
        $this->mailer = app(MailAdapter::class);
        $this->sms = app(SmsAdapter::class);
    }

    public function send($subject, $template, $data)
	{
        dd('MailAndSms');
		$this->sms->send($subject, $template, $data);
		$this->mailer->send($subject, $template, $data);
	}
}