<?php

trait CanComment
{
    public function comment($post, $comment)
    {
        return "$this->name set $comment->description on post $post->title";
    }
}
