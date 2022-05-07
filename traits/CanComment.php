<?php

trait CanComment
{
    private function canComment($user)
    {
        if (!in_array('can_comment', $user->access)) {
            throw new Exception('you don\'t have access!');
        }
    }
}
