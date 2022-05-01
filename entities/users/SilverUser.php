<?php

class SilverUser extends User
{
    protected $access = [
        'can_comment', 'can_like',
    ];

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
