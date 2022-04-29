<?php

class User
{
    use Objectable;

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;

        static::$listOfObjects[] = $this;
    }
}
