<?php
namespace App\Library\Avatar\Generator;

interface GeneratorInterface
{
    public function make($name, $length, $uppercase, $ascii);
}