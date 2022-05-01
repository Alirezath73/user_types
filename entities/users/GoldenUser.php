<?php

class GoldenUser extends User
{
    protected $access = [
        'can_comment', 'can_like', 'can_archive'
    ];

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
