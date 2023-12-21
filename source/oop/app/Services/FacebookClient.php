<?php

namespace App\Services;

class FacebookClient implements SocialPosting
{
    public function post() 
    {
        dd('Post to Facebook');
    }
}