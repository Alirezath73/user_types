<?php

trait Objectable
{
    protected static $listOfObjects = [];
    
    public function objects()
    {
        return static::$listOfObjects;
    }
}
