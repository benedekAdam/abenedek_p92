<?php
use Medoo\Medoo;

$db = new Medoo([
    'database_type' => 'sqlite',
    'database_file' => 'db/p92.db',
    'logging' => true
    //'database_file' => ':memory:'
]);
