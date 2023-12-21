<?php

namespace App\Services;

interface MailAdapter 
{
    public function send($subject, $template, $data);
}