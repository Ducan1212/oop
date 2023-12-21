<?php

namespace App\Services;

interface SmsAdapter 
{
    public function send($subject, $template, $data);
}