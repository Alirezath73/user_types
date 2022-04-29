<?php

class Post
{
    use Logable;

    public $title;
    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;

        $this->log();
    }
}
