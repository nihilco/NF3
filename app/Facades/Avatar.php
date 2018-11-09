<?php
namespace App\Facades;

class Avatar extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
      return 'avatar';
    }
}