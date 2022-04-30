<?php

require_once 'vendor/autoload.php';

$post = new Post('football', 'barcellona is a best team in the world');
$user = new GoldenUser('Alireza');
$comment = new Comment('this is wonderful');

die(var_dump($user->comment($post, $comment)));
die(var_dump($user->objects()));
