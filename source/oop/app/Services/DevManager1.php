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

interface HiringManager1 {
   public function makeInterviewer();
}

class DevManager1 implements HiringManager1
{
    public function makeInterviewer(): Interview
    {
        return new Dev();
    }
}

class ManagerManager implements HiringManager1
{
    public function makeInterviewer(): Interview
    {
        return new Manager();
    }
}

$devManager = new DevManager1();

dd($devManager->makeInterviewer()->ask(), $devManager->makeInterviewer()->question());

$devManager = new ManagerManager();
