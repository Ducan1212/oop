<?php 

namespace App\Services;

interface Interview
{
    public function ask();
    public function question();
}

class Dev implements Interview
{
    public function ask()
    {
        return ('What is PHP?');
    }

    public function question()
    {
        return ('Php is lanuagage programing');
    }
}

class Manager implements Interview
{
    public function ask()
    {
        return ('Asking about community building');
    }

    public function question()
    {
        return ('Php is lanuagage programing 1');
    }

}

abstract class HiringManager
{
    abstract public function makeInterviewer(): Interview;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();

        $a = $interviewer->ask();
        $b = $interviewer->question();

        return $a;
    }
}

class DevManager extends HiringManager
{
    public function makeInterviewer(): Interview
    {
        return new Dev();
    }
}

class ManagerManager extends HiringManager
{
    public function makeInterviewer(): Interview
    {
        return new Manager();
    }
}

$devManager = new DevManager();

dd($devManager->takeInterview());

$devManager = new ManagerManager();
