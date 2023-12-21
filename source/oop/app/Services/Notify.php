<?php

namespace App\Services;

interface Notify 
{
    public function send($subject, $template, $data);
}