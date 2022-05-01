<?php

trait CanLike
{
    private function canLike($user)
    {
        if (!in_array('can_like', $user->access)) {
            throw new Exception;
        }
    }
}
