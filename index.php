<?php

require_once 'vendor/autoload.php';

$post = new Post('football', 'Barcelona is a best team in the world');
$normalUser = new NormalUser('Alireza');
$goldenUser = new GoldenUser('reza');
$silverUser = new SilverUser('saeed');
$comment = new Comment('this is wonderful');


die(var_dump($goldenUser->archive($post)));
