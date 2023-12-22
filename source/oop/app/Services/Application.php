<?php

namespace App\Services;

interface GuiFactory
{
    public function createButton(): Button;
}

class WinFactory implements GuiFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }
}

class MacFactory implements GuiFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }
}

interface Button
{
    public function paint();
}

class WinButton implements Button
{
    public function paint()
    {
        return ('WinButton');
    }
}

class MacButton implements Button
{
    public function paint()
    {
        return ('MacButton');
    }
}

class Application
{
    public function __construct(GuiFactory $factory)
    {
        $button = $factory->createButton();

        return $button->paint();
    }
}

$factory = new MacFactory();

$win = new Application($factory);
dd($win);