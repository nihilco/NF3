<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AmazonProductAdvertising extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */
     protected static function getFacadeAccessor(): string
     {
         return \App\Library\Amazon\ProductAdvertising\Api::class;
     }
}