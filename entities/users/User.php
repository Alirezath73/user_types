<?php

abstract class User
{
    use CanComment, CanLike, CanArchive;

    public function comment(Post $post, Comment $comment)
    {
        try {
            $this->canComment($this);
            return "$this->name set comment ($comment->description) on post $post->title";
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function archive(Post $post)
    {
        try {
            $this->canArchive($this);
            return "$this->name archive post $post->title";
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function like(Post $post)
    {
        try {
            $this->canLike($this);
            return "$this->name like post $post->title";
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
