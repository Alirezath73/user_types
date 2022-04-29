<?php

trait Logable
{
    private $path = './log/logs.txt';

    private function log()
    {
        file_put_contents($this->path, $this->serialize(), FILE_APPEND);
    }

    private function serialize()
    {
        return serialize($this);
    }
}
