<?php

namespace App\Services;

class SmsAddOn implements Notify 
{
    protected $notifier;
    protected $sms;

    public function __construct(Notify $notifier)
    {
        $this->notifier = $notifier;
        $this->sms = app(SmsAdapter::class);
    }

    public function send($subject, $template, $data)
    {
        $this->notifier->send($subject, $template, $data);
        $this->sms->send($subject, $template, $data);
    }
}