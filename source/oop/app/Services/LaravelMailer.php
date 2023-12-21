<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class LaravelMailer implements MailAdapter
{
    public function send($subject, $template, $data)
	{
        dd('LaravelMailer');
		Mail::send($template, ['user' => $data], function ($m) use ($data, $subject) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($data['email'], $data['name'])->subject($subject);
        });
	}
}