<?php

trait Objectable
{
    private static $listOfObjects = [];
    
    public function objects()
    {
        return static::$listOfObjects;
    }
}
