<?php

namespace App\Services;

class TwitterAdapter implements SocialPosting
{
    protected $twitter;

    public function __construct(TwitterClient $twitter)
    {
        $this->twitter = $twitter;
    }

    public function post() 
    {
        $this->twitter->tweet();
    }
}