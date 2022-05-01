<?php

class NormalUser extends User
{
    protected $access = [
        'can_like'
    ];

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
