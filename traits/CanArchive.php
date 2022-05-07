<?php

trait CanArchive
{
    private function canArchive($user)
    {
        if (!in_array('can_archive', $user->access)) {
            throw new Exception('you don\'t have access!');
        }
    }
}
