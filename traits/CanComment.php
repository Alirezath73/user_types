<?php

trait CanComment
{
    public function comment(Post $post, Comment $comment)
    {
        return "$this->name set comment ($comment->description) on post $post->title";
    }
}
