<?php

namespace App\Services;

class Sms implements SmsAdapter
{
    public function send($subject, $template, $data)
	{
		dd('sms');
	}
}